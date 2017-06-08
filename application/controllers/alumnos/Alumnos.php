<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumnos extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('AlumnosModel', 'alumnos');
        $this->load->model('EstadosModel', 'estados');

    }

	public function index()
	{
        $this->load->helper(array('dateformat', 'mayusculas', 'mayusculas1', 'unidad'));
		$this->data['titulo'] = 'Alumnos';
		$this->data['listar'] = $this->alumnos->listar();
		$this->load->view('header', $this->data);
		$this->load->view('alumnos/alumnos');
		$this->load->view('footer');
	}

	public function registrar()
    {	
        $this->data['titulo'] = 'Registrar';
        $this->data['action'] = 'alumnos/Alumnos/guardar';
        $this->data['estados'] = $this->estados->listar();
        $this->load->view('header', $this->data);
        $this->load->view('alumnos/registro', $this->data);
		$this->load->view('footer');
    }

    public function guardar()
    {
        $nombre_al = $this->input->post('nombre_al');
        $apellido_al = $this->input->post('apellido_al');
        $fecha_nac = $this->input->post('fecha_nac');
        $sexo = $this->input->post('sexo');
        $gsa = $this->input->post('gsa');
        $padres = $this->input->post('padres');
        $estados_id = $this->input->post('estados_id');
        $municipios_id = $this->input->post('municipios_id');
        $resultado = $this->alumnos->guardar($nombre_al, $apellido_al, $fecha_nac, $sexo, $gsa, $padres, $estados_id, $municipios_id);
        if($resultado){
            redirect(base_url('alumnos/Alumnos'));
        }else{
            $this->data['metodo'] = 'guardar';
            $this->data['error'] = 'error';
        	$this->data['action'] = 'alumnos/Alumnos/guardar';
            $this->data['url']   = 'alumnos/Alumnos';
            $this->data['titulo'] = 'Registro';
            $this->load->view('alumnos/registro', $this->data);
        }
    }

    public function modificar($id)
    {
        $this->data['id']      = $id;
        $this->data['action'] = 'alumnos/Alumnos/editar';
        $this->data['titulo'] = 'Modificar';
        $this->data['alumnos'] = $this->alumnos->buscar($id);
        $this->data['estados'] = $this->estados->listar();
        $this->load->view('header', $this->data);
        $this->load->view('alumnos/registro', $this->data);
		$this->load->view('footer');
    }

    public function editar()
    {
        $id = $this->input->post('id');
        $nombre_al = $this->input->post('nombre_al');
        $apellido_al = $this->input->post('apellido_al');
        $fecha_nac = $this->input->post('fecha_nac');
        $sexo = $this->input->post('sexo');
        $gsa = $this->input->post('gsa');
        $padres = $this->input->post('padres');
        $estados_id = $this->input->post('estados_id');
        $municipios_id = $this->input->post('municipios_id');
        $resultado = $this->alumnos->editar($id, $nombre_al, $apellido_al, $fecha_nac, $sexo, $gsa, $padres, $estados_id, $municipios_id);
        if($resultado){
            redirect(base_url('alumnos/Alumnos'));
        }else{
            $this->data['metodo'] = 'guardar';
            $this->data['error'] = 'error';
            $this->data['action'] = 'alumnos/Alumnos/guardar';
            $this->data['url']   = 'alumnos/Alumnos';
        }
    }

    public function eliminar($id)
    {
        $resultado = $this->alumnos->eliminar($id);
        if($resultado){
            redirect(base_url('alumnos/Alumnos'));
        }
    }
}