<?php
if (!defined ('BASEPATH')) exit('No direct script access allowed');

class usuario_model extends CI_Model{
  public function __construct()
  {
    parent::__construct();
  }




function get_usuarios(){
  //$this->db->señect('id,nombre , apellido , username');
  $query = $this->db->get('usuarios');

  if($query->num_rows()>0){
    return $query;
  }else{
    return FALSE;
  }
}

function agregar_usuario($data){
  $this->db->insert('usuarios', $data);
  $insert_id=$this->db->insert_id();
  return $insert_id;
}
function editar_usuario($data){
      $query= $this->db->get_where('usuarios', array('id'=> $id), 1);
      if($query->num_rows()== 1){
        return $query;
      }else{
        return FALSE;
      }
}
function actualizar_usuario($id,$data){
  $this->db->where('id', $id);
  $query = $this->db->update('usuarios',$data);
  if($query){
    return TRUE;
  }else{
    return FALSE;
  }
}
function eliminar_usuario($id){
      $this->db->where('id', $id);
      $query=$this->db->delete('usuarios');
      return true;
}
}
