<?php
session_start();
class home extends CI_Controller
{
	public function index()
	{
		$this->db->select('*');
		$this->db->from('tbl_member');
		if($_SESSION['member_gender']=='Male')
		{
			$this->db->where('member_gender','Female');
		}
		else
		{
			$this->db->where('member_gender','Male');
		}
		$page_data['resultset']=$this->db->get();

		
		$this->load->view('user/home_view',$page_data);
	}

	

	public function find_member_via_age()
	{
		
		$min_age=$this->input->post('txt_min_age');
		 $max_age=$this->input->post('txt_max_age');
		 $this->db->select('*');
		$this->db->from('tbl_member');
		if($_SESSION['member_gender']=='Male')
		{
			$this->db->where('member_gender','Female');
			$this->db->where('member_age >=',$min_age);
			$this->db->where('member_age <=',$max_age);
		}
		else
		{
			$this->db->where('member_gender','Male');
			$this->db->where('member_age >=',$min_age);
			$this->db->where('member_age <=',$max_age);
		}
		$page_data['resultset']=$this->db->get();
		// echo $min_age;
		// echo $max_age;
		$this->load->view('user/home_view',$page_data);
	}

	public function find_member_via_city()
	{
		
		$location=$this->input->post('txt_location');
		 

		$this->db->select('tbl_member.*');
		$this->db->from('tbl_member');
		$this->db->join('tbl_city','tbl_city.city_id=tbl_member.city_id');
		if($_SESSION['member_gender']=='Male')
		{
			$this->db->where('tbl_member.member_gender','Female');
			$this->db->where('tbl_city.city_name',$location);
		}
		else
		{
			$this->db->where('member_gender','Male');
			$this->db->where('tbl_city.city_name',$location);
		}
		$page_data['resultset']=$this->db->get();
		// echo $min_age;
		// echo $max_age;
		$this->load->view('user/home_view',$page_data);
	}
}
?>
