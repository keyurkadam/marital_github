<?php 
session_start();
class login extends CI_Controller
{
	public function index()
	{
		$this->load->view('/user/login_view');	
	}
	

	public function login_check()
	{
		// $this->load->library('form_validation');
		// $this->form_validation->set_rules('txt_email','Email','required');
		// if($this->form_validation->run() == TRUE)
		// {
		// 	echo "valid";
		// }
		$data['msg']='';
		if($_POST)
		{
			$email 	=	$this->input->post('txt_email');
			$pwd 	=	$this->input->post('txt_password');

			$login_res = $this->db->get_where('tbl_member',array('member_email'=>$email,'member_password'=>$pwd));
			//echo $login_res->num_rows();

			if($login_res->num_rows()>0)
			{
				foreach($login_res->result() as $login_row)
				{
					$_SESSION["member_name"] = $login_row->member_name;
					$_SESSION["member_email"] = $login_row->member_email;
					$_SESSION["member_id"]=$login_row->member_id;
					$_SESSION["member_gender"]=$login_row->member_gender;
					redirect(base_url().'home');
					// $url=$_SERVER["HTTP_REFERER"];
					// redirect($url);
				}
			}
			else
			{
				$url=$_SERVER["HTTP_REFERER"];
				redirect($url);
				//  $data['msg']='<div class="alert alert-danger" role="alert"><strong>Wrong!</strong> Invalid Username or Password!</div>';
			}
		}
		//$this->load->view('login_view',$data);

	}

	public function log_out()
	{
		unset($_SESSION["member_name"]);
		unset($_SESSION["member_email"]);
		unset($_SESSION["member_id"]);
		session_destroy();
		//redirect(base_url().'login/login_check');
		redirect(base_url().'user');
	}
}
?>