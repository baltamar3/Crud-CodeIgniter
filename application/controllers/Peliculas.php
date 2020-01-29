<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peliculas extends CI_Controller {

	public function __construct(){
        parent::__construct();
		$this->load->model('pelicula_model');
		$this->load->helper('url');
	  }
	  
	public function cargar_datos_peliculas(){
		$datos = $this->pelicula_model->get_peliculas();
        foreach ($datos as $row) {
        	$peliculas["data"][] = $row;
		}
		echo json_encode($peliculas);
        return;
	}
      
	public function index()
	{
        $data["peliculas"] = $this->pelicula_model->get_peliculas();
		$this->load->view('header');
		$this->load->view('peliculas_lista',$data);
	}

	public function new()
	{
		$this->load->view('header');
		$this->load->view('peliculas_new');
	}

	public function guardar()
	{
		$nombre = $this->input->post("nombre");
		$descripcion = $this->input->post("descripcion");
		$genero = $this->input->post("genero");
		$director = $this->input->post("director");
		$resultado = $this->pelicula_model->guardar($nombre,$descripcion,$genero,$director);
		
		redirect('/peliculas', 'refresh');
		
	}
}
