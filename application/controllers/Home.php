<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function test($id, $hola = 'Hola') {
		echo $id;
		
		echo $hola;
	}

	public function vistas() {
		// TODO: $data['titulo'] = la variable data viene por defecto con codeigniter.
		$data['titulo'] = 'TODO A SU TIEMPO, JUAN!';


		$data['lista'] = array('negro', 'azul', 'blanco');

		// ! aca estamos agregando y fucionando dos vistas
		// ! a la vista vistas, le estamos mandando la variable $data, que podra ser manejada con la variable titulo en la vista
		$this->load->view('vistas', $data);
		$this->load->view('footer');
	}
}
