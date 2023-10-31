<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct() {
		parent::__construct();
		error_reporting(0);
		$this->load->library('session');
		$this->load->model('Admodel');
	}

	public function index()
	{
		if(($this->session->userdata('admin_role')!="")){
			$thisWeek = strtotime('-' . date('w') . ' days');

			// $data['new_user']=$this->Admodel->users(1,'count');
			// $data['total_user']=$this->Admodel->users(2,'count');
			// $data['today_booking']=$this->Admodel->bookings(array('booking_date'=>date('Y-m-d')),'count','book_id');
			// $data['week_booking']=$this->Admodel->bookings(array('DATE(booking_date) >='=> $thisWeek),'count','book_id');
			// $data['total_booking']=$this->Admodel->bookings(null,'count','book_id');
			$data['data']=$this->Admodel->users(2,'all');
			$this->load->view('inc/header');
			$this->load->view('user',$data);
			$this->load->view('inc/footer');
		}else{
			redirect('Admin/log_in');
		}
	}
	public function log_in(){
		$this->load->view('log_in');
	}
	public function auth(){
		// print_r($this->input->post());
		$user_name=$this->input->post('username');
		$pass=$this->input->post('password');

		$valid=$this->db->get_where('admin',array('admin_username'=>$user_name,'admin_password'=>md5($pass)));
		if($valid->num_rows()>0){
			$admin_data=$valid->row_array();
			$this->session->set_userdata($admin_data);
			redirect(base_url());
			// print_r($this->session->userdata());
		}else{
			$this->session->set_flashdata('auth', 'Invalid Credential');
			redirect("Admin/log_in");
		}
	}
	public function user($id){
		// print_r($id);
		$data['data']=$this->Admodel->users($id,'all');
		// print_r($data);
		    $this->load->view('inc/header');
			$this->load->view('user',$data);
			$this->load->view('inc/footer');
	}
	public function user_active(){
		// print_r();
		$status=$this->input->post('status');
		$user_id=$this->input->post('user_id');


		$updated=$this->db->where('user_id',$user_id)->update('users',array('user_status'=> $status));
		if($updated){
			echo true;
		}else{
			echo false;
		}

	}
	public function products(){
		$this->load->view('inc/header');
		$this->load->view('products');
		$this->load->view('inc/footer');
	}
	public function product_page(){
		$this->load->view('inc/header');
		$this->load->view('product_page');
		$this->load->view('inc/footer');
	}
	public function updateuser(){
		$id=$this->input->post('user_id');

		$upd['user_name']=$this->input->post('user_name');
		$upd['user_mobile_no']=$this->input->post('user_mobile_no');
		$upd['user_email']=$this->input->post('user_email');
		$upd['user_gender']=$this->input->post('user_gender');

		$this->db->where('user_id',$id);
		$updated=$this->db->update('users',$upd);
		if($updated){
			redirect('user/'.$id.'');
		}
		
	}public function deleteuser(){
		$id=$this->input->post('user_id');
		$deleted=$this->db->delete('users',array('user_id'=>$id));
		if($deleted){
			redirect('user/'.$id.'');
		}
	}


	public function log_out(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
	public function referal_list(){
		$data['data']=$this->Admodel->referal_list();
		$this->load->view('inc/header');
		$this->load->view('referal',$data);
		$this->load->view('inc/footer');
	}
}
