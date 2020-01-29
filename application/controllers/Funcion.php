<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Funcion extends CI_Controller {

	public function __construct(){
		parent::__construct();
        $this->load->model('funcion_model');

	  }
	  
	public function cargar_datos_funciones(){
		$datos = $this->funcion_model->get_funciones();
        foreach ($datos as $row) {
        	$funciones["data"][] = $row;
		}
		echo json_encode($funciones);
        return;
	}

	public function index()
	{
		
		$this->load->view('header');
	
	}

	public function new()
	{
		$this->load->view('header');
		$this->load->view('funciones_new');
	}

	public function guardar()
	{
		$lugar = $this->input->post("lugar");
		$cupos = $this->input->post("cupos");
		$pelicula = $this->input->post("pelicula");
		$data["resultado"] = $this->funcion_model->guardar($lugar,$cupos,$pelicula);
		return $data;
	}
}
