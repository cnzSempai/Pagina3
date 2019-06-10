<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class consulta_model extends CI_Model{

	/**
    * Constructor de la clase
    */
    public function __construct() {
        parent::__construct();
    }

    function get_consultas()
  	{
  		//$this->db->select('id, nombre, apellido, username');
  		$query = $this->db->get('consultas');

  		if($query->num_rows()>0) {
              return $query;
          } else {
              return FALSE;
          }
  	}

    function add_consulta($data)
  	{
  		$this->db->insert('consultas', $data);
  		$insert_id = $this->db->insert_id();
  		return $insert_id;
  	}

    function delete_consulta($id)
  	{
  		$this->db->where('id', $id);
  		$query = $this->db->delete('consultas');
  		return true;
  	}

}
