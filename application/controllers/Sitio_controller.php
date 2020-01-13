<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sitio_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('inicio');
	}

	public function fomularioRegistro(){
		$this->load->view('generico/header');
		$this->load->view('registro/formulario');
		$this->load->view('generico/footer');
	}
}
