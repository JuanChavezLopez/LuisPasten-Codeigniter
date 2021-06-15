<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {

    public function __construct() {
		parent::__construct();
		$this->load->helper(array('getmenu'));

        // !cargamos nuestra base de datos
        $this->load->database();
	}

    public function index() {
        $data['menu'] = main_menu();
        $this->load->view('registro', $data);

        // !hacemos la query hacia la tabla usuarios
        $query = $this->db->get('usuarios');
        var_dump($query->result());
    }

    public function create(){
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $password_c = $this->input->post('password_confirm');

        var_dump($username . $email . $password . $password_c);
    }


}