<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Funcion_model extends CI_Model {

	public function __construct(){
        parent::__construct();
        $this->load->database();
  	}
	public function get_funciones()
	{
        $this->db->select("lugar, cupos, p.nombre as pelicula");
        $this->db->from("funcion f");
        $this->db->join('pelicula p', 'f.pelicula = p.id');
        $query = $this->db->get();

        return $query->result_array(); 
    }
    
    public function guardar($lugar,$cupos,$pelicula){
        $this->db->insert("funcion",array(
			"lugar"=>$lugar,
			"cupos"=>$cupos,
			"pelicula"=>$pelicula,
		));
    }
}
