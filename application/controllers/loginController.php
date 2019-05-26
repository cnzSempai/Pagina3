<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->model('loginModelo');
	}

	function index()
	{   //Reglas de validación
		$this->form_validation->set_rules('usuario', 'usuario', 'trim|required');
		$this->form_validation->set_rules('password', 'password','trim|required|callback__valid_login');

		//Mensajes en caso de error
		$this->form_validation->set_message('required', 'el campo %s es requerido');
		$this->form_validation->set_message('_valid_login', 'El usuario o contraseña son incorrectos');
		$this->form_validation->set_message('is_unique', 'El campo %s ya existe');

		//Forma en que muestra los mensajes de error
		$this->form_validation->set_error_delimiters('<ul><li>', '</li></ul>');

		if ($this->form_validation->run() == FALSE)
		{	//En caso de que falle la validacion vuelve a cargar la pagina de Login
			$data = array('titulo' => 'Error de datos');
			$this->load->view('front/head_view',$data);
			$this->load->view('front/navbar_view');
			$this->load->view('login');
			$this->load->view('front/footer_view');
		}
		else{
			//Pagina que carga despues de loguearse
			//redirect(current_url()); ---> Vuelve a la pagina que estaba antes de loguearse
			redirect(base_url('principal'));
        }
	}


	function _valid_login($password)
	{
		//Se validaron los campos exitosamente. Se valida con la base de datos
		$usuario = $this->input->post('usuario');

        //Consulta a la base
		$result = $this->loginModelo->validarUsuario($usuario, $password);

		if($result)
		{	//Si el resultado es correcto lo asigna a la variable session
			$sess_array = array();
			foreach($result as $row)
			{
				$sess_array = array('id' => $row->id,
									'nombre' => $row->nombre,
									'apellido' => $row->apellido,
									'email' => $row->email,
                                    'perfil_id' => $row->perfil_id,
                                    'usuario' => $row->usuario,
                                    'password' => $row->pass);

				$this->session->set_userdata('logged_in', $sess_array);
			}
			return TRUE;
		}
		else 	//Sino devuelve que los datos no coinciden
		{
			$this->form_validation->set_message('check_database', '<div class="alert alert-danger">Usuario o Contraseña invalido</div>');
			return false;
		}
	}


    //Este metodo llama a la pagina Login
	public function login()
	{
		$data = array('titulo' => 'Iniciar Sesión');

		$session_data = $this->session->userdata('logged_in');
	    $data['perfil_id'] = $session_data['perfil_id'];
		$data['nombre'] = $session_data['nombre'];

		$this->load->view('front/head_view', $data);
		$this->load->view('front/navbar_view', $data);
		$this->load->view('login');
		$this->load->view('front/footer_view');
	}



     function cerrar_sesion(){
			//destruyo la variable de sesión
			$this->session->sess_destroy();
			//direcciono a la página principal
			redirect(base_url('principal'));
		}

}
