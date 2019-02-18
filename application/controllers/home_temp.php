<?php
session_start();

class home_temp extends CI_Controller
{
	public function index()
	{
		echo "<h1>ddvd</h1>";
		$c=$this->input->post('txt_min_age');
		echo $c;
	}
}

?>