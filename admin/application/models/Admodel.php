<?php

if(!defined('BASEPATH')) exit('No direct script access allowed');

class Admodel extends CI_Model
{


	function users($day=NULL,$fetch){
		$today=date('Y-m-d');
		
		$this->db->select('*');
		$this->db->from('users');
		if($day==1){
			$con=array(
				'DATE(user_create_at)'=>$today
			);
		$this->db->where($con);
		$qry=$this->db->order_by('user_id','DESC')->get();
		}else{
		$qry=$this->db->order_by('user_id','DESC')->get();
		}
		if($fetch=='count'){
			$data=$qry->num_rows();
		}elseif($fetch=='row'){
			$data=$qry->row_array();
		}else{
			$data=$qry->result_array();
		}
		return $data;
	}
	function bookings($day=null,$fetch,$col=null){
		
		$this->db->select('*');
		$this->db->from('bookings');
		if($day!=null){
			$this->db->where($day);
		}
		$this->db->join('users','users.user_id=bookings.user_for_id');
		$qry=$this->db->order_by($col,'DESC')->get();
		
		if($fetch=='count'){
			$data=$qry->num_rows();
		}elseif($fetch=='row'){
			$data=$qry->row_array();
		}else{
			$data=$qry->result_array();
		}
		// return $this->db->last_query();
		return $data;
	}
	function referal_list(){
		$this->db->select('COUNT(ref_id) as count,referal.*,users.*');
		$this->db->from('referal');
		$this->db->join('users','users.user_id=referal.refferer_id','left');
		$this->db->group_by('referal.refferer_id');
		$data=$this->db->get()->result_array();
		return $data;
	}



}
