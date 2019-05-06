<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		//$this->load->view('principal.php');
		$data = array('titulo' => 'CRISport');

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
}
