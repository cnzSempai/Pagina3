<?php
class usuarioController extends CI_Controller{
function __construct()
{
    parent::__construct();
    $this ->load->model('usuario_model'); //cargamos el modelo
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


function index()
{
    if($this->_veri_log()){
    $data = array('titulo' => 'Usuarios');

    $session_data = $this->session->userdata('logged_in');
    $data['perfil_id'] = $session_data['perfil_id'];
    $data['nombre'] = $session_data['nombre'];

    $dat = array('usuarios' => $this->usuario_model->get_usuarios() );

    $this->load->view('front/head_view', $data);
    $this->load->view('front/navbar_view');
    $this->load->view('usuarios/muestrausuarios', $dat);
    $this->load->view('front/footer_view');
    }else{
    redirect('login', 'refresh'); }
}



function datosusuario($id)
{
    if($this->_veri_log()){
    $data = array('titulo' => 'Usuario');

    $session_data = $this->session->userdata('logged_in');
    $data['perfil_id'] = $session_data['perfil_id'];
    $data['nombre'] = $session_data['nombre'];

    $dat = array('usuario' => $this->usuario_model->edit_usuario($id) );

    $this->load->view('front/head_view', $data);
    $this->load->view('front/navbar_view');
    $this->load->view('usuarios/muestraDatos', $dat);
    $this->load->view('front/footer_view');
    }else{
    redirect('login', 'refresh'); }
}


/**
* Muestra formulario para agregar usuario
*/
function form_agrega_usuario()  	//Si se modifica, modificar (agrega_usuario) tambien
{
    if($this->_veri_log()){
    $data = array('titulo' => 'Agregar Usuarioo');

    $session_data = $this->session->userdata('logged_in');
    $data['perfil_id'] = $session_data['perfil_id'];
    $data['nombre'] = $session_data['nombre'];

    $this->load->view('front/head_view', $data);
    $this->load->view('front/navbar_view');
    $this->load->view('usuarios/agregausuario');
    $this->load->view('front/footer_view');
    }else{
    redirect('login', 'refresh'); }
}


/**
* Verifica datos ingresados en el formulario para agregar usuario
*/
function agrega_usuario()
{
    //Genero las reglas de validacion
    $this->form_validation->set_rules('nombre', 'Nombre', 'required');
    $this->form_validation->set_rules('apellido', 'Apellido', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required|is_unique[usuarios.email]');
    $this->form_validation->set_rules('usuario', 'Usuario', 'required|is_unique[usuarios.nombre]');
    $this->form_validation->set_rules('password', 'password', 'required');
    $this->form_validation->set_rules('perfil_id', 'perfil_id', 'required');

    //Mensaje de error si no pasan las reglas
    $this->form_validation->set_message('required',
                                '<div class="alert alert-danger">El campo %s es obligatorio</div>');

    $this->form_validation->set_message('is_unique',
                                '<div class="alert alert-danger">El campo %s ya existe</div>');

    $this->form_validation->set_message('numeric',
                    '<div class="alert alert-danger">El campo %s debe contener un valor numérico</div>');


    if (!$this->form_validation->run())
    {
        $data = array('titulo' => 'Error de formulario');

        $session_data = $this->session->userdata('logged_in');
        $data['perfil_id'] = $session_data['perfil_id'];
        $data['nombre'] = $session_data['nombre'];


        $this->load->view('front/head_view', $data);
        $this->load->view('front/navbar_view');
        $this->load->view('usuarios/agregausuario');
        $this->load->view('front/footer_view');
    }else {
      $data = array(
          'nombre'=>$this->input->post('nombre',true),
          'apellido'=>$this->input->post('apellido',true),
          'email'=>$this->input->post('email',true),
          'usuario'=>$this->input->post('usuario',true),
          'pass'=>$this->input->post('password',true),
          'perfil_id'=>$this->input->post('perfil_id',true),
          'baja'=>'NO',
      );

      $usuarios = $this->usuario_model->add_usuario($data);

      redirect('usuarios_todos', 'refresh');

    }
}


/**
* Muestra para modificar un usuario
*/
function muestra_modificar()
{
    $id = $this->uri->segment(2);
    $datos_usuario = $this->usuario_model->edit_usuario($id);

    if ($datos_usuario != FALSE) {
        foreach ($datos_usuario->result() as $row)
        {
            $nombre = $row->nombre;
            $apellido = $row->apellido;
            $email = $row->email;
            $usuario = $row->usuario;
            $pass = $row->pass;
            $perfil_id = $row->perfil_id;
        }

        $dat = array('usuario' =>$datos_usuario,
            'id'=>$id,
            'nombre'=>$nombre,
            'apellido'=>$apellido,
            'email'=>$email,
            'usuario'=>$usuario,
            'pass'=>$pass,
            'perfil_id'=>$perfil_id
        );
    }
    else
    {
        return FALSE;
    }
    if($this->_veri_log()){
    $data = array('titulo' => 'Modificar mis datos');
    $session_data = $this->session->userdata('logged_in');
    $data['perfil_id'] = $session_data['perfil_id'];
    $data['nombre'] = $session_data['nombre'];

    $this->load->view('front/head_view', $data);
    $this->load->view('front/navbar_view');
    $this->load->view('usuarios/modificarDatos', $dat);
    $this->load->view('front/footer_view');
    }else{
    redirect('login', 'refresh');}
}

/**
* Verifica datos para modificar un usuario
*/
function modificar_usuario()
{
    //Validación del formulario
    $this->form_validation->set_rules('usuario', 'Usuario', 'required|is_unique[usuarios.nombre]');
    $this->form_validation->set_rules('perfil_id', 'Perfil', 'required');
    $this->form_validation->set_rules('nombre', 'Nombre', 'required');
    $this->form_validation->set_rules('apellido', 'Apellido', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required');
    $this->form_validation->set_rules('pass', 'Password', 'required|numeric');


    //Mensaje del form_validation
    $this->form_validation->set_message('required','<div class="alert alert-danger">El campo %s es obligatorio, al intentar modificar estaba vacio</div>');

    $this->form_validation->set_message('numeric','<div class="alert alert-danger">El campo %s debe contener un valor numérico, al intentar modificar estaba vacio</div>');

    $id = $this->uri->segment(2);
    $datos_usuario = $this->usuario_model->edit_usuario($id);


    $dat = array(
        'id'=>$id,
        'usuario'=>$this->input->post('usuario',true),
        'perfil_id'=>$this->input->post('perfil_id',true),
        'nombre'=>$this->input->post('nombre',true),
        'apellido'=>$this->input->post('apellido',true),
        'email'=>$this->input->post('email',true),
        'pass'=>$this->input->post('pass',true),
    );

    if ($this->form_validation->run()==FALSE)
    {
        $data = array('titulo' => 'Error de formulario');
        $session_data = $this->session->userdata('logged_in');
        $data['perfil_id'] = $session_data['perfil_id'];
        $data['nombre'] = $session_data['nombre'];

        $this->load->view('front/head_view', $data);
        $this->load->view('front/navbar_view');
        $this->load->view('usuarios/modificarDatos', $dat);
        $this->load->view('front/footer_view');
    }
    else
    {
      $dat = array(
          'id'=>$id,
          'usuario'=>$this->input->post('usuario',true),
          'perfil_id'=>$this->input->post('perfil_id',true),
          'nombre'=>$this->input->post('nombre',true),
          'apellido'=>$this->input->post('apellido',true),
          'email'=>$this->input->post('email',true),
          'pass'=>$this->input->post('pass',true),
      );
      $this->usuario_model->update_usuario($id, $dat);
      redirect('usuarios_todos', 'refresh');
    }

}
function modificar_perfil()
{
    //Validación del formulario
    $this->form_validation->set_rules('usuario', 'Usuario', 'required|is_unique[usuarios.nombre]');
    // $this->form_validation->set_rules('perfil_id', 'Perfil', 'required');
    $this->form_validation->set_rules('nombre', 'Nombre', 'required');
    $this->form_validation->set_rules('apellido', 'Apellido', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required');
    $this->form_validation->set_rules('pass', 'Password', 'required|numeric');


    //Mensaje del form_validation
    $this->form_validation->set_message('required','<div class="alert alert-danger">El campo %s es obligatorio, al intentar modificar estaba vacio</div>');

    $this->form_validation->set_message('numeric','<div class="alert alert-danger">El campo %s debe contener un valor numérico, al intentar modificar estaba vacio</div>');

    $id = $this->uri->segment(2);
    $datos_usuario = $this->usuario_model->edit_usuario($id);

    if ($this->form_validation->run()==FALSE)
    {
        $data = array('titulo' => 'Error de formulario');
        $session_data = $this->session->userdata('logged_in');
        $data['perfil_id'] = $session_data['perfil_id'];
        $data['nombre'] = $session_data['nombre'];

        $this->load->view('front/head_view', $data);
        $this->load->view('front/navbar_view');
        $this->load->view('usuarios/modificarDatos', $dat);
        $this->load->view('front/footer_view');
    }
    else
    {
      $dat = array(
          'id'=>$id,
          'usuario'=>$this->input->post('usuario',true),
          'perfil_id'=>$this->input->post('perfil_id',true),
          'nombre'=>$this->input->post('nombre',true),
          'apellido'=>$this->input->post('apellido',true),
          'email'=>$this->input->post('email',true),
          'pass'=>$this->input->post('pass',true),
      );
      $this->usuario_model->update_usuario($id, $dat);
      redirect('principal', 'refresh');
    }

}

/**
* Obtiene los datos del archivo imagen.
* Permite archivos gif, jpg, png
* Verifica si los datos son correcto en conjunto con la imagen y lo inserta en la tabla correspondiente
* Si el campo imagen se encuentra vacio asume que la imagen no fue moficado.
* En la tabla guarda la URL de donde se encuentra la imagen.
*/

function _image_modif()
{
    //Cargo la libreria para subir archivos
    $this->load->library('upload');

    // Obtengo el id del libro
    $id = $this->uri->segment(2);

    // Array de datos para obtener datos de libros sin la imagen


    // Si la iamgen esta vacia se asume que no se modifica
    if (!empty($_FILES['filename']['name']))
    {
        // Especifica la configuración para el archivo
        $config['upload_path'] = 'assets/img/usuarios/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';

        $config['max_size'] = '2048';
        $config['max_width']  = '1024';
        $config['max_height']  = '768';

        // Inicializa la configuración para el archivo
        $this->upload->initialize($config);

        if ($this->upload->do_upload('filename'))
        {
                // Mueve archivo a la carpeta indicada en la variable $data
            $data = $this->upload->data();

                // Path donde guarda el archivo..
            $url ="assets/img/usuarios/".$_FILES['filename']['name'];

                // Agrego la imagen si se modifico.
            $dat['imagen']=$url;

                // Actualiza datos del libro
            $this->usuario_model->update_usuario($id, $dat);
            redirect('usuarios_todos', 'refresh');
        }
        else
        {
                //Mensaje de error si no existe imagen correcta
            $imageerrors = '<div class="alert alert-danger">El campo %s es incorrecta, extención incorrecto o excede el tamaño permitido que es de: 2MB </div>';
            $this->form_validation->set_message('_image_modif',$imageerrors );
            return false;
        }
    }
    else
    {

    }
}


/**
* Obtiene los datos del usuario a eliminar
*/
function eliminar_usuario(){
    $id = $this->uri->segment(2);
    $data = array(
        'baja'=>'SI'
    );

    $this->usuario_model->estado_usuario($id, $data);
    redirect('usuarios_todos', 'refresh');
}

/**
* Obtiene los datos del usuario a activar
*/
function activar_usuario(){
    $id = $this->uri->segment(2);
    $data = array(
        'baja'=>'NO'
    );

    $this->usuario_model->estado_usuario($id, $data);
    redirect('usuarios_todos', 'refresh');
}


/**
* Usuario eliminados logicamente
*/
function muestra_eliminados()
{
    if($this->_veri_log()){
    $data = array('titulo' => 'Usuarios eliminados');
    $session_data = $this->session->userdata('logged_in');
    $data['perfil_id'] = $session_data['perfil_id'];
    $data['nombre'] = $session_data['nombre'];

    $dat = array(
        'usuarios' => $this->usuario_model->not_active_usuarios()
    );

    $this->load->view('front/head_view', $data);
    $this->load->view('front/navbar_view');
    $this->load->view('muestrausuarioseliminados', $dat);
    $this->load->view('front/footer_view');
    }else{
    redirect('login', 'refresh');}
}
















function nuevo_usuario()
{
     //Genero las reglas de validación
     //name del campo, ¨título, restricciones
    $this->form_validation->set_rules('nombre', 'Nombre', 'required');
    $this->form_validation->set_rules('apellido', 'Apellido', 'required');
    $this->form_validation->set_rules('email', 'Usuario','required|trim|valid_email|is_unique[users.username]');
    $this->form_validation->set_rules('email', 'Usuario','required|trim|valid_email|is_unique[users.username]');
    $this->form_validation->set_rules('reg_password', 'Contraseña','required|xss_clean');
    $this->form_validation->set_rules('re_password', 'Repetir contraseña','required|matches[reg_password]');
    //Mensaje de error si no pasan las reglas
    $this->form_validation->set_message('required','<div class="alert alert-danger">El campo %s es obligatorio</div>');
    $this->form_validation->set_message('matches','<div class="alert alert-danger">La contraseña ingresada no coincide</div>');
    $pass = $this->input->post('re_password',true);
    //Preparo los datos para guardar en la base, en caso de que pase la validación
    //Los datos corresponden a los nombres de mi campos de la base de datos
    $data = array(
        'name'=>$this->input->post('nombre',true),
        'last_name'=>$this->input->post('apellido',true),
        'username'=>$this->input->post('email',true),
        'password'=>md5($pass)
    );
}
}
