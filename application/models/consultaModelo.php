<?php
if ( !defined('BASEPATH')) exit ('No direct script access allowed');

class consultaModelo extends CI_Model{
  public function __construct(){
    parent::__construct();
  }

  function validarConsulta($email, $descripcion){
    $query = $this->db->get_where('consultas', array('email'=>$email,'descripcion'=>$descripcion), 1);

    if ($query->num_rows() == 1) {
      return $query->result();
    }
    else{
      return false;
    }
  }

  function agregar_consulta($data){
    $this->db->insert('consultas', $data);
    $insert_id=$this->db->insert_id();
    return $insert_id;
  }
}
