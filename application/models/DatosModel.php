<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DatosModel extends CI_Model {

    private $tabla = 'datos';

    public function __construct()
    {
        parent::__construct();
    }
    public function listar()
    {
        $query = $this->db->get($this->tabla);
        return $query->result();
    }

        public function guardar($cedula, $nombre_re, $apellido_re, $telefono_1, $telefono_2, $email)
    {
        $this->db->select('id');
        $this->db->where('cedula', $cedula);
        $query = $this->db->get($this->tabla);
        if($query->num_rows()> 0){
            return FALSE;
        }
        $data = array(
            'cedula' => $cedula,
            'nombre_re' => $nombre_re,
            'apellido_re' => $apellido_re,
            'telefono_1' => $telefono_1,
            'telefono_2' => $telefono_2,
            'email' => $email
            );
        return $this->db->insert($this->tabla, $data);
    }

    public function buscar($id)
    {
        $this->db->select('id, cedula, nombre_re, apellido_re, telefono_1, telefono_2, email');
        $this->db->where('id', $id);
        $query = $this->db->get($this->tabla);
        return $query->row();
    }

    public function editar($id, $cedula, $nombre_re, $apellido_re, $telefono_1, $telefono_2, $email)
    {
        $this->db->select('id');
        $this->db->where('id!=', $id);
        $this->db->where('cedula', $cedula);
        $query = $this->db->get($this->tabla);
        if($query->num_rows() > 0){
            return FALSE;
        }
        $data = array(
            'cedula' => $cedula,
            'nombre_re' => $nombre_re,
            'apellido_re' => $apellido_re,
            'telefono_1' => $telefono_1,
            'telefono_2' => $telefono_2,
            'email' => $email
            );
        $this->db->where('id', $id);
        $resultado = $this->db->update($this->tabla, $data);
        // echo $this->db->last_query();
        // exit;
        return $resultado;
    }

    public function eliminar($id)
    {
        return $this->db->delete($this->tabla, array('id' => $id));
    }

    public function busca($bus)
    {
        $this->db->like('apellido_re', $bus, 'after');
        $query = $this->db->get($this->tabla);
        return $query->result();
    }
}
