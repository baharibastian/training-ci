<?php

class Users extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->model('model_users');
	}

	public function login()
	{
		if($this->session->userdata('id')!=NULL) {
			redirect('shorten');
		} else {
			$this->load->view('login');
		}
	}

	public function login_act()
	{
		$this->model_users->cek();
	}

	public function register()
	{
		$this->load->view('register');
	}

	public function register_act()
	{
		// $link = anchor('home/loginPage', 'disini');
		$username				= addslashes($this->input->post('username'));
		$password				= addslashes($this->input->post('password'));
		$email					= addslashes($this->input->post('email'));	
		$firstname   			= addslashes($this->input->post('firstname'));
		$lastname				= addslashes($this->input->post('lastname'));

		$data = array(
				'id'			=> null,
				'username'		=> $username,
				'password'		=> $password,
				'email'			=> $email,
				'first_name'		=> $firstname,
				'last_name'		=> $lastname,
				'created'		=> date('Y-m-d H:i:s')
				);
			$this->model_users->get_insert($data);
			$this->session->set_flashdata("pesan", "<div class=\"ui green message\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Akun anda berhasil dibuat! Silahkan masuk $link</div>");
			redirect('shorten');
	}

	function logout()
	{
		$this->load->library('session');
        $this->load->helper('url');
        $this->session->unset_userdata('id');
        redirect('users/login','refresh');
	}

}