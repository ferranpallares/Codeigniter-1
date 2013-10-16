<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class usuaris extends CI_Controller {



	public function crear()
	{
		$this->load->view('crear_usuari');
	}
	
	public function modificar($id)
	{
		$this->load->view('modificar_usuari');
	
	}

	public function eliminar()
	{
		$this->load->view('elimina_usuari');
	}
	


	public function llistar()
	{
		$this->load->view('llistar');
	}

	public function index()
	{
		$this->load->view('menu');
	}
	
	
	public function hello()
	{
		$this->load->model('Say_hello');

 		$data['hola'] = $this->Say_hello->hola();

		$this->load->view('blog', $data);
	}
	

	
	
}
