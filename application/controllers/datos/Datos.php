<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datos extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('DatosModel', 'datos');
        $this->load->model('EstadosModel', 'estados');
        $this->load->model('MunicipiosModel', 'municipios');
        $this->load->model('ParroquiasModel', 'parroquias');

    }

	public function index()
	{
        $this->load->helper(array('dateformat', 'mayusculas', 'mayusculas1', 'unidad'));
		$this->data['titulo'] = 'Datos';
		$this->data['listar'] = $this->datos->listar();
		$this->load->view('header', $this->data);
        $this->load->view('datos/datos');
		$this->load->view('footer');
	}

	public function registrar()
    {	
        $this->data['action'] = 'datos/Datos/guardar';
        $this->data['titulo'] = 'Registro';
        
        $this->load->view('header', $this->data);
        $this->load->view('datos/registro', $this->data);
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
        
        $resultado = $this->datos->guardar($cedula, $nombre_re, $apellido_re, $telefono_1, $telefono_2, $email);
        if($resultado){
            redirect(base_url('datos/Datos'));
        }else{
            // $this->data['metodo'] = 'guardar';
            $this->data['error'] = 'error';
        	$this->data['action'] = 'datos/Datos/guardar';
            $this->data['url']   = 'datos/Datos';
            $this->data['titulo'] = 'Registro';
            $this->load->view('datos/registro', $this->data);
        }
    }

    public function modificar($id)
    {
        $this->data['id']      = $id;
        $this->data['action'] = 'datos/Datos/editar';
        $this->data['titulo'] = 'Modificar';
        $this->data['datos'] = $this->datos->buscar($id);
        // print_r($this->data);
        $this->load->view('header', $this->data);
        $this->load->view('datos/registro', $this->data);
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

        $resultado = $this->datos->editar($id, $cedula, $nombre_re, $apellido_re, $telefono_1, $telefono_2, $email);
        if($resultado){
            redirect(base_url('datos/Datos'));
        }else{
            $this->data['metodo'] = 'guardar';
            $this->data['error'] = 'error';
            $this->data['action'] = 'datos/Datos/guardar';
            $this->data['url']   = 'datos/Datos';
        }
    }

    public function eliminar($id)
    {
        $resultado = $this->datos->eliminar($id);
        if($resultado){
            redirect(base_url('datos/Datos'));
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
        $this->data['datos'] = $this->datos->busca($this->buscar);

        $this->data['titulo'] = 'Busqueda de Dato';
        $this->load->view('header', $this->data);
        $this->load->view('datos/buscar');
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
