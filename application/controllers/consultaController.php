<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class consultaController extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->model('consultaModelo');
	}

	function index()
	{   //Reglas de validación
    $this->form_validation->set_rules('email', 'email', 'required');
    $this->form_validation->set_rules('descripcion', 'descripcion', 'required');
		//Mensajes en caso de error
		$this->form_validation->set_message('required', 'el campo %s es requerido');
		$this->form_validation->set_message('required', 'el campo %s es requerido');
		$this->form_validation->set_message('required', 'el campo %s es requerido');
		//Forma en que muestra los mensajes de error
		$this->form_validation->set_error_delimiters('<ul><li>', '</li></ul>');

		$data1 = array(
			'email'=>$this->input->post('email',true),
			'descripcion'=>$this->input->post('descripcion',true)
		);

		if ($this->form_validation->run() == FALSE)
		{	//En caso de que falle la validacion vuelve a cargar la pagina de Login
			$data = array('titulo' => 'Error de datos');
			$this->load->view('front/head_view',$data);
			$this->load->view('front/navbar_view');
			$this->load->view('contactanos');
			$this->load->view('front/footer_view');
		}
		else{
			$consulta = $this->consultaModelo->agregar_consulta($data1);
			//Pagina que carga despues de loguearse

			//redirect(current_url()); ---> Vuelve a la pagina que estaba antes de loguearse
			redirect(base_url('Contactanos'));
        }
	}



}
