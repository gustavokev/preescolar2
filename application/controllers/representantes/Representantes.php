<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Representantes extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('RepresentantesModel', 'representantes');
        $this->load->model('EstadosModel', 'estados');
        $this->load->model('MunicipiosModel', 'municipios');
        $this->load->model('ParroquiasModel', 'parroquias');

    }

	public function index()
	{
        $this->load->helper(array('dateformat', 'mayusculas', 'mayusculas1', 'unidad'));
		$this->data['titulo'] = 'Representantes';
		$this->data['listar'] = $this->representantes->listar();
		$this->load->view('header', $this->data);
        $this->load->view('representantes/representantes');
		$this->load->view('footer');
	}

	public function registrar()
    {	
        $this->data['action'] = 'representantes/Representantes/guardar';
        $this->data['titulo'] = 'Registrar';
        
        $this->load->view('header', $this->data);
        $this->load->view('representantes/registro', $this->data);
        $this->load->view('footer');
        
    }

    public function guardar()
    {
        $cedula = $this->input->post('cedula');
        $nombre_re = $this->input->post('nombre_re');
        $apellido_re = $this->input->post('apellido_re');
        $telefono_1 = $this->input->post('telefono_1');
        $telefono_2 = $this->input->post('telefono_2');
        $email = $this->input->post('email');
        
        $resultado = $this->representantes->guardar($cedula, $nombre_re, $apellido_re, $telefono_1, $telefono_2, $email);
        if($resultado){
            redirect(base_url('representantes/Representantes'));
        }else{
            // $this->data['metodo'] = 'guardar';
            $this->data['error'] = 'error';
        	$this->data['action'] = 'representantes/Representantes/guardar';
            $this->data['url']   = 'representantes/Representantes';
            $this->data['titulo'] = 'Registrar';
            $this->load->view('representantes/registro', $this->data);
        }
    }

    public function modificar($id)
    {
        $this->data['id']      = $id;
        $this->data['action'] = 'representantes/Representantes/editar';
        $this->data['titulo'] = 'Modificar';
        $this->data['representantes'] = $this->representantes->buscar($id);
        // print_r($this->data);
        $this->load->view('header', $this->data);
        $this->load->view('representantes/registro', $this->data);
		$this->load->view('footer'); 
    }

    public function editar()
    {
        $id = $this->input->post('id');
        $cedula = $this->input->post('cedula');
        $nombre_re = $this->input->post('nombre_re');
        $apellido_re = $this->input->post('apellido_re');
        $telefono_1 = $this->input->post('telefono_1');
        $telefono_2 = $this->input->post('telefono_2');
        $email = $this->input->post('email');

        $resultado = $this->representantes->editar($id, $cedula, $nombre_re, $apellido_re, $telefono_1, $telefono_2, $email);
        if($resultado){
            redirect(base_url('representantes/Representantes'));
        }else{
            $this->data['metodo'] = 'guardar';
            $this->data['error'] = 'error';
            $this->data['action'] = 'representantes/Representantes/guardar';
            $this->data['url']   = 'representantes/Representantes';
        }
    }

    public function eliminar($id)
    {
        $resultado = $this->representantes->eliminar($id);
        if($resultado){
            redirect(base_url('representantes/Representantes'));
        }
    }

    public function buscar()
    {
        if ($_POST) {
            $this->buscar = $this->input->post('busqueda');
        }else{
            $this->buscar = '';
        }
        $this->load->helper(array('dateformat', 'mayusculas', 'mayusculas1', 'unidad'));
        $this->data['representantes'] = $this->representantes->busca($this->buscar);

        $this->data['titulo'] = 'Busqueda de Representante';
        $this->load->view('header', $this->data);
        $this->load->view('representantes/buscar');
        $this->load->view('footer');
    }

    public function getAjaxmunicipio()
    {
        if($this->input->is_ajax_request() && $this->input->get("estado"))
        {
            $this->load->model("Municipiosmodel");
            $estadoId = $this->input->get("estado");

            $municipios = $this->municipios->getMunicipios($estadoId);

            $data = array(
                "municipios" => $municipios,

            );

            echo json_encode($data);
        }
    }

    public function getAjaxparroquia()
    {
        if($this->input->is_ajax_request() && $this->input->get("municipio"))
        {
            $this->load->model("Parroquiasmodel");
            $municipioId = $this->input->get("municipio");

            $parroquias = $this->parroquias->getParroquias($municipioId);

            $data = array(
                "parroquias" => $parroquias,

            );

            echo json_encode($data);
        }
    }
}
