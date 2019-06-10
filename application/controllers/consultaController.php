<?php
class consultaController extends CI_controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('consulta_model');
	}

	function index(){

		//validacion
		$this->form_validation->set_rules('nombre', 'Nombre','required');
		$this->form_validation->set_rules('apellido', 'Apellido','required');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[consultas.email]');
		$this->form_validation->set_rules('asunto', 'Asunto','required');

		//Mensaje error
		$this->form_validation->set_message('required', '<div class="alert alert-danger">El campo %s es requerido</div>');

		//Preparo los datos para guardar en la base, en caso de que pase la validacion
			$data = array(
				'nombre'=>$this->input->post('nombre',true),
				'apellido'=>$this->input->post('apellido',true),
				'email'=>$this->input->post('email',true),
				'asunto'=>$this->input->post('asunto',true),
				'mensaje'=>$this->input->post('mensaje',true)
			);

			//Si no pasa la validacion de datos
			if ($this->form_validation->run() == FALSE)
			{
				//Muestra la página de registro con el título de error
				$data = array('titulo' => 'Error de formulario');
				$this->load->view('front/head_view', $data);
				$this->load->view('front/navbar_view');
				$this->load->view('Contactanos');
				$this->load->view('front/footer_view');
			}

			else 	//Pasa la validacion
			{
				//Envio array al metodo insert para registro de datos
				$apellido = $this->consulta_model->add_consulta($data);

				//Redirecciono a la pagina de perfil
				$this->form_validation->set_message('required',
											'<div class="alert alert-danger">MENSAJE ENVIADO CORRECTAMENTE</div>');
				redirect('Contactanos');
			}
	}

	private function _veri_log()
		{
			if ($this->session->userdata('logged_in'))
			{
				return TRUE;
			} else {
				return FALSE;
			}
		}

  function listar_consultas()
    {
           if($this->_veri_log()){
    $data = array('titulo' => 'Consultas');

    $session_data = $this->session->userdata('logged_in');
    $data['perfil_id'] = $session_data['perfil_id'];
    $data['nombre'] = $session_data['nombre'];


    $dat = array('ventas_cabecera' => $this->consulta_model->get_consultas ());

    $this->load->view('front/head_view',$data);
    $this->load->view('front/navbar_view',$data);
    $this->load->view('reportes/verconsultas',$dat);
    $this->load->view('front/footer_view');
          }else{
    redirect('login', 'refresh');
          }
       }

	function eliminar_consulta(){
		$id = $this->uri->segment(2);
		$data = array(
			'baja'=>'SI'
		);

		$this->consulta_model->delete_consulta($id, $data);
		redirect('consultas', 'refresh');
	}

}
