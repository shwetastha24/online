<?php
class Login extends MY_Controller{
	public function index()
	{
		$this->load->helper('form');
		$this->load->view('user/admin_login');

	}
	public function admin_login()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','User name','required|alpha_numeric|trim');
		$this->form_validation->set_rules('password','Password','required');

		if ($this->form_validation->run()){ //if validatin pass
			//Success
			echo "Validation Sucess.";
			}
			else{
				//failed
				$this->load->view('user/admin_login');
				//echo "Validation Failed.";

				

			}
	}
}