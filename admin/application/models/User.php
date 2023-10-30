<?php
class User extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
        $this->load->library('upload');
	}
    private $table="users";

    public function get_otp($num){
        return rand(111111,999999);
     }
	public function get_otp_4($num){
	return rand(1111,9999);
	}

	public function user_name_gen($name){

		$name_cap=strtoupper($name);
		$slice_name=substr($name_cap,'0','4');
		$rand=rand('1111','9999');
		$num_rows=$this->db->get($this->table)->num_rows();
		$get_id=$num_rows++;

		$user_name=$slice_name.$rand.$get_id;
		return $user_name;

	}

     public function get_rows($con,$row){
		$table=$this->table;
        if($row=='all'){
            return $this->db->get_where($table,$con)->result_array();
        }elseif($row=='single'){
            return $this->db->get_where($table,$con)->row_array();
        }elseif($row=='count'){
            return $this->db->get_where($table,$con)->num_rows();
        }else{
            return $this->db->get($table)->result_array();
        }
        
    }
	public function row_update($con,$feilds){
		$table=$this->table;
		$updated=$this->db->where($con)->update($table,$feilds);
		return $updated;
	}
	public function add_row($ins){
		$result=array();

		$ins['user_unique_id']=$this->user_name_gen($ins['user_name']);

			$inserted=$this->db->insert($this->table,$ins);
			if($inserted==true){
				$get_id=$this->db->insert_id();
				$get_con=array('user_id'=>$get_id);
				$result=$this->db->get_where($this->table,$get_con)->row_array();
				return $result;
			}else{
				return array();
			}	
	}
	function booking_details($id){
		$result=$this->db->get_where('bookings',array('book_id'=>$id))->row_array();

			// unset($result['booking_status']);
			// unset($result['trip_status']);
			// unset($result['user_for_id']);
			return $result;
	}
	function my_bookings($user_id,$con=null){

		$this->db->select('*');
		$this->db->from('bookings');
		if($con!="" || $con!=null){
			$this->db->where($con);
		}
		$this->db->where(array('user_for_id'=>$user_id));
		$result=$this->db->join('users','users.user_id=bookings.user_for_id')->get()->result_array();

		foreach($result as $row){

			$data[]=$row;
		}
		// $this->db->get_where('booking',array('user_for_id'=>$user_id));
		return $data;
	}
	

}




?>
