<?php

	class registroController extends CI_Controller{

		function __construct()
		{
			parent::__construct();
			$this ->load->model('usuario_model');
		}

		/**
	    *
	    */
		function index()
		{
			//Genero las reglas de validacion
			$this->form_validation->set_rules('nombre', 'Nombre', 'required');
			$this->form_validation->set_rules('apellido', 'Apellido', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[usuarios.email]');
			/*$this->form_validation->set_rules('usuario', 'Usuario',
											'trim|required|xss_clean|is_unique[usuarios.usuario]');*/
                      $this->form_validation->set_rules('usuario', 'Usuario',
                											'trim|required|is_unique[usuarios.usuario]');
			//$this->form_validation->set_rules('password', 'Contraseña','required|xss_clean');
			$this->form_validation->set_rules('password', 'Contraseña','required');

			$this->form_validation->set_rules('re_password', 'Repetir contraseña', 'required|matches[password]');


			//Mensaje de error si no pasan las reglas
			$this->form_validation->set_message('required',
										'<div class="alert alert-danger">El campo %s es obligatorio</div>');

			$this->form_validation->set_message('matches',
										'<div class="alert alert-danger">Los contraseña ingresada no coincide</div>');

			$this->form_validation->set_message('is_unique',
										'<div class="alert alert-danger">El campo %s ya existe</div>');

			$pass = $this->input->post('re_password',true);

			//Preparo los datos para guardar en la base, en caso de que pase la validacion
			$data = array(
				'nombre'=>$this->input->post('nombre',true),
				'apellido'=>$this->input->post('apellido',true),
				'email'=>$this->input->post('email',true),
				'perfil_id'=>'2',
				'usuario'=>$this->input->post('usuario',true),
				'pass'=>($pass)
			);

			//Si no pasa la validacion de datos
			if ($this->form_validation->run() == FALSE)
			{
				//Muestra la página de registro con el título de error
				$data = array('titulo' => 'Error de formulario');
				$this->load->view('front/head_view', $data);
				$this->load->view('front/navbar_view');
				$this->load->view('registrarse');
				$this->load->view('front/footer_view');
			}

			else 	//Pasa la validacion
			{
				//Envio array al metodo insert para registro de datos
				$usuario = $this->usuario_model->agregar_usuario($data);

				//Redirecciono a la pagina de perfil
				redirect('login');
			}
		}

	}
/* End of file
*/
