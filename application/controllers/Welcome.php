<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('mihelper');
	
  	}
	public function index()
	{
		$this->load->view('header');
		$this->load->view('inicio');
	}
}