<?php 

class Model_Users extends CI_Model 
{

	var $tabel = 'users';

	public function __construct() {
		parent::__construct();
		$this->load->library('session');
	}

	function cek(){
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$query=$this->db->query("select * from users where username='$username' and password='$password'");
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $data) {
				$data=array(
					'id'=>$data->id,
					'username'=>$data->username,
					'password'=>$data->password
					);
				$this->session->set_userdata($data);	
				redirect('shorten' ,$data);		
			}
		} else {
			echo "password salaha";
			// redirect('users/login');
		}	
	}

	public function get_insert($data){
		$this->db->insert($this->tabel,$data);
		return TRUE;
	}

}