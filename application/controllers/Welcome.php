<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){
		parent::__construct();

	}
	public function index()
	{
		//$this->load->view('principal.php');
		$data = array('titulo' => 'CRISport');

		$session_data = $this->session->userdata('logged_in');
		$data['perfil_id'] = $session_data['perfil_id'];
		$data['nombre'] = $session_data['nombre'];

		$this->load->view('front/head_view',$data);
		$this->load->view('front/navbar_view');
		$this->load->view('Principal');
		$this->load->view('front/footer_view');

	}



	public function quienes_somos()
	{
		//$this->load->view('principal.php');
		$data = array('titulo' => 'Quienes Somos');

		$this->load->view('front/head_view',$data);
		$this->load->view('front/navbar_view');
		$this->load->view('quienes_somos');
		$this->load->view('front/footer_view');

	}
	public function terminos_y_condiciones()
	{
		//$this->load->view('principal.php');
		$data = array('titulo' => 'Terminos y condiciones');

		$this->load->view('front/head_view',$data);
		$this->load->view('front/navbar_view');
		$this->load->view('terminos_y_condiciones');
		$this->load->view('front/footer_view');

	}
	public function Contactanos()
	{
		//$this->load->view('principal.php');
		$data = array('titulo' => 'Contactanos');

		$this->load->view('front/head_view',$data);
		$this->load->view('front/navbar_view');
		$this->load->view('Contactanos');
		$this->load->view('front/footer_view');

	}
	public function comercializacion()
	{
		//$this->load->view('principal.php');
		$data = array('titulo' => 'comercialización');

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
		$this->load->view('front/navbar_registrarse');
		$this->load->view('registrarse');
		$this->load->view('front/footer_view');

	}
	public function login()
	{
		//$this->load->view('principal.php');
		$data = array('titulo' => 'login');
		$session_data = $this->session->userdata('logged_in');
		$data['perfil_id']=$session_data['perfil_id'];
		$data['nombre']=$session_data['nombre'];

		$this->load->view('front/head_view',$data);
		$this->load->view('front/navbar_registrarse');
		$this->load->view('login');
		$this->load->view('front/footer_view');

	}
}
