<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
		parent::__construct();
		// $this->load->helper(array('getmenu'));
		$this->load->library('form_validation');

		// !cargamos nuestro helper global
		$this->load->helper(array('auth/login_rules'));
	}

	public function index()
	{
		// $data['menu'] = main_menu();
		$this->load->view('login');
	}
	
	public function validate(){
		$rules = getLoginRules();
		$this->form_validation->set_rules($rules);

		if($this->form_validation->run() === FALSE){
			$this->load->view('login');
		}else{

		}
	}
}
