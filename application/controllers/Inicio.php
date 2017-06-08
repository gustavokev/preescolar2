<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('InicioModel', 'inicio');
    }

	public function index()
	{
		$this->data['titulo'] = 'Inicio';
		$this->data['listar'] = $this->inicio->listar(); //print_r($this->data); exit;
		$this->load->view('header', $this->data);
		$this->load->view('inicio');
		$this->load->view('footer');
	}
}


