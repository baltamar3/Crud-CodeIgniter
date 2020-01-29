<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelicula_model extends CI_Model {

	public function __construct(){
        parent::__construct();
        $this->load->database();
  	}
	public function get_peliculas()
	{
        $query = $this->db->get("pelicula");
        return $query->result_array(); 
	}

	public function guardar($nombre,$descripcion,$genero,$director){
        $this->db->insert("pelicula",array(
			"nombre"=>$nombre,
			"descripcion"=>$descripcion,
			"genero"=>$genero,
			"director"=>$director,
		));
    }
}
