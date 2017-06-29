<?php

class Users extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
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
		$this->form_validation->set_rules('username','Username','required|callback_username_exists|xss_clean');
		$this->form_validation->set_rules('password','Password','required|xss_clean|min_length[6]|max_length[30]');
		$this->form_validation->set_error_delimiters('<div class="alert alert-warning">', '</div>');
		$this->form_validation->set_message('min_length', '%s: the minimum of characters is %s');
		$this->form_validation->set_message('max_length', '%s: the maximum of characters is %s');

		if($this->form_validation->run() == TRUE) {
			$username=$this->input->post('username');
			$password=$this->input->post('password');
			// $query=$this->db->query("select * from users where username='$username' and password='$password'");
			$this->db->select('*');
			$this->db->from('users');
			$this->db->where(array('username' => $username, 'password' => $password));
			$query = $this->db->get();
			if ($query->num_rows() > 0) {
				// foreach ($query->result() as $data) {
				// 	$data=array(
				// 		'id'=>$data->id,
				// 		'username'=>$data->username,
				// 		'password'=>$data->password
				// 		);
				// 	$this->session->set_userdata($data);	
				// 	redirect('shorten' ,$data);		
				// }
				$data = array (
					'id' 		=> $query->row()->id,
					'username'	=> $query->row()->username,
					'password'	=> $query->row()->password
					);
				$this->session->set_userdata($data);
				redirect('shorten', $data);
			} else {
				$this->session->set_flashdata("pesan", "<div class=\"alert alert-warning\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Username dan Password anda salah</div>");
				redirect('users/login');
			}
		} else {
			$this->load->view('login');
		}	
	}

	public function register()
	{
		$this->load->view('register');
	}

	public function register_act()
	{
		// $link = anchor('home/loginPage', 'disini');
		$this->form_validation->set_rules('username','Username','required|callback_username_check|xss_clean');
		$this->form_validation->set_rules('password','Password','required|xss_clean|min_length[6]|max_length[30]');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email|xss_clean');
		$this->form_validation->set_rules('firstname','First Name','required');
		$this->form_validation->set_rules('lastname','Last Name','required');
		$this->form_validation->set_error_delimiters('<div class="alert alert-warning">', '</div>');
		$this->form_validation->set_message('min_length', '%s: the minimum of characters is %s');
		$this->form_validation->set_message('max_length', '%s: the maximum of characters is %s');

		if($this->form_validation->run() == true) {
			$username				= $this->input->post('username');
			$password				= $this->input->post('password');
			$email					= $this->input->post('email');	
			$firstname   			= $this->input->post('firstname');
			$lastname				= $this->input->post('lastname');

			$data = array(
				'id'			=> null,
				'username'		=> $username,
				'password'		=> $password,
				'email'			=> $email,
				'first_name'	=> $firstname,
				'last_name'		=> $lastname,
				'created'		=> date('Y-m-d H:i:s')
				);
			$this->model_users->get_insert($data);
			$this->session->set_flashdata("pesan", "<div class=\"ui green message\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Successfully Registered!</div>");
			redirect('shorten');
		} else {
			$this->load->view('register');
		}
		
	}

	function logout()
	{
		$this->load->library('session');
		$this->load->helper('url');
		$this->session->unset_userdata('id');
		redirect('users/login','refresh');
	}

	function username_check($username) {
		$query = $this->db->get_where('users', array('username' => $username));
		if($query->num_rows() > 0) {
			$this->form_validation->set_message('username_check', 'The {field} field already exists');
			return FALSE;
		} else {
			return TRUE;
		}
	}

	function username_exists($username) {
		$query = $this->db->get_where('users', array('username' => $username));
		if($query->num_rows() == 0) {
			$this->form_validation->set_message('username_exists', 'The {field} could not be found');
			return FALSE;
		} else {
			return TRUE;
		}
	}
}