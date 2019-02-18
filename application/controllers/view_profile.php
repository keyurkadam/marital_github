<?php
session_start();

class view_profile extends CI_Controller
{
	public function index()
	{	
		
		//$this->load->view("user/view_profile_view");
	}

	public function view_profile_via_id($id)
	{
		$this->db->select("*");
		$this->db->from("tbl_member");
		$this->db->join("tbl_partner_preference","tbl_partner_preference.member_id=tbl_member.member_id");
		$this->db->where("tbl_member.member_id",$id);
		$page_data["resultset"]=$this->db->get();
		$this->load->view("user/view_profile_view",$page_data);
	}
}
?>