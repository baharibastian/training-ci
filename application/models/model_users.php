<?php 

class Model_Users extends CI_Model 
{

	var $tabel = 'users';

	public function __construct() {
		parent::__construct();
		$this->load->library('session');
	}

	function cek(){
		
	}

	public function get_insert($data){
		$this->db->insert($this->tabel,$data);
		return TRUE;
	}

}