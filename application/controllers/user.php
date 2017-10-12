<?php

class User extends MY_Controller{
	public function index()
	{
		//echo "shweta";
		$this->load->helper('html');
		$this->load->view('user/home');
	}
}
