<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {

    public function __construct() {
		parent::__construct();
		$this->load->helper(array('getmenu'));

        // !cargamos nuestro modelo users
        $this->load->model('Users');

        // !cargamos nuestra base de datos
        $this->load->database();

        // !validaciones de formularios, primero lo cargamos en el controlador, para luego usarlo
        $this->load->library(array('form_validation'));
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

        $config = array(
            array(
                    'field' => 'username',
                    'label' => 'Nombre de Usuario',
                    'rules' => 'required|alpha_numeric'
            ),
            array(
                    'field' => 'email',
                    'label' => 'Correo',
                    'rules' => 'required|valid_email',
                    'error' => array(
                        // !el simbolo %s automaticamente adquiere el valor dado en label.
                        'required' => 'El %s es invalido',
                    ),
            ),
        );

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE){
            $data['menu'] = main_menu();
            $this->load->view('registro', $data);

        } else {
            $datos = array(
                'nombre_usuario' => $username,
                'correo' => $email,
                'contrasena' => $password,
            );
    
            $data['menu'] = main_menu();
    
            // !interactuamos con nuestro model: Users, function create
            if(!$this->Users->create($datos)){
                $data['msg'] = 'Ocurrio un error al ingresar los datos, ingrese mas tarde';
                $this->load->view('registro', $data);
            }else{
                $data['msg'] = 'Registrado correctamente!';
                $this->load->view('registro', $data);
            }
        }
        // var_dump($username . $email . $password . $password_c);
    }
}