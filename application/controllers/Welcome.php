<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
	{
		parent::__construct();

		$this->load->model('carrito_model');
		$this->load->model('Producto_modelo');
        $this->load->library('cart');
	}


	public function index()
	{
		//$this->load->view('principal.php');
		$data = array('titulo' => 'CRISport');
		$dat = array('productos' => $this->Producto_modelo->get_electrodomesticos());

		$session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['nombre'] = $session_data['nombre'];

		$this->load->view('front/head_view',$data);
		$this->load->view('front/navbar_view');
		$this->load->view('Principal',$dat);
		$this->load->view('front/footer_view');

	}



	public function quienes_somos()
	{
		//$this->load->view('principal.php');
		$data = array('titulo' => 'Quienes Somos');
		$session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['nombre'] = $session_data['nombre'];

		$this->load->view('front/head_view',$data);
		$this->load->view('front/navbar_view');
		$this->load->view('quienes_somos');
		$this->load->view('front/footer_view');

	}
	public function login()
	{
		//$this->load->view('principal.php');
		$data = array('titulo' => 'Login');
		$session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['nombre'] = $session_data['nombre'];

		$this->load->view('front/head_view',$data);
		$this->load->view('front/navbar_view');
		$this->load->view('login');
		$this->load->view('front/footer_view');

	}
	public function terminos_y_condiciones()
	{
		//$this->load->view('principal.php');
		$data = array('titulo' => 'Terminos y condiciones');
		$session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['nombre'] = $session_data['nombre'];

		$this->load->view('front/head_view',$data);
		$this->load->view('front/navbar_view');
		$this->load->view('terminos_y_condiciones');
		$this->load->view('front/footer_view');

	}
	public function Contactanos()
	{
		//$this->load->view('principal.php');
		$data = array('titulo' => 'Contactanos');
		$session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['nombre'] = $session_data['nombre'];

		$this->load->view('front/head_view',$data);
		$this->load->view('front/navbar_view');
		$this->load->view('Contactanos');
		$this->load->view('front/footer_view');

	}
	public function comercializacion()
	{
		//$this->load->view('principal.php');
		$data = array('titulo' => 'comercialización');
		$session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['nombre'] = $session_data['nombre'];

		$this->load->view('front/head_view',$data);
		$this->load->view('front/navbar_view');
		$this->load->view('comercializacion');
		$this->load->view('front/footer_view');

	}

	public function registrarse()
	{
		//$this->load->view('principal.php');
		$data = array('titulo' => 'registrarse');
		$session_data = $this->session->userdata('logged_in');
		$data['perfil_id']=$session_data['perfil_id'];
		$data['nombre']=$session_data['nombre'];

		$this->load->view('front/head_view',$data);
		$this->load->view('front/navbar_view');
		$this->load->view('registrarse');
		$this->load->view('front/footer_view');

	}
	// public function agregaproducto()
	// {
	// 	//$this->load->view('principal.php');
	// 	$data = array('titulo' => 'registrarse');
	// 	$session_data = $this->session->userdata('logged_in');
	// 	$data['perfil_id']=$session_data['perfil_id'];
	// 	$data['nombre']=$session_data['nombre'];
	//
	// 	$this->load->view('front/head_view',$data);
	// 	$this->load->view('front/navbar_view');
	// 	$this->load->view('agregaproducto');
	// 	$this->load->view('front/footer_view');
	//
	// }

}
