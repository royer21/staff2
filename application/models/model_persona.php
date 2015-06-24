<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Persona extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function all() {
        $this->db->select('persona.* , base.nombre as base_nombre');
        $this->db->select('persona.* , area.nombre as area_nombre');
        $this->db->from('persona');
        $this->db->join('base', 'persona.base_id = base.id', 'left');
        $this->db->join('area', 'persona.area_id = area.id', 'left');
       
        $query = $this->db->get();
        return $query->result();
      
    }


    function allFiltered($field, $value) {
        $this->db->select('persona.* , base.nombre as base_nombre,area.nombre as area_nombre');
       
        $this->db->from('persona');
        $this->db->join('base', 'persona.base_id = base.id', 'left');
        $this->db->join('area', 'persona.area_id = area.id', 'left');

        $this->db->like($field, $value);
        $this->db->or_like('persona.apellido_pat', $value);
        $this->db->or_like('persona.apellido_mat', $value);
        $this->db->or_like('persona.dni', $value);
        $this->db->or_like('area.nombre', $value);
        $this->db->or_like('base.nombre', $value);

        $query = $this->db->get();
        return $query->result();
    }

    function allFiltered_base($field,$value) {
        $this->db->select('persona.* , base.nombre as base_nombre,area.nombre as area_nombre');
    
        $this->db->from('persona');
        $this->db->join('base', 'persona.base_id = base.id', 'left');
        $this->db->join('area', 'persona.area_id = area.id', 'left');

        $this->db->like($field, $value);

        $query = $this->db->get();
        return $query->result();
    }


    function allFiltered_area($field,$value) {
        $this->db->select('persona.* , base.nombre as base_nombre , area.nombre as area_nombre');
    
        $this->db->from('persona');
        $this->db->join('base', 'persona.base_id = base.id', 'left');
        $this->db->join('area', 'persona.area_id = area.id', 'left');
        $this->db->like($field, $value);

        $query = $this->db->get();
        return $query->result();
    }


    function find($id) {
        $this->db->where('id', $id);
        return $this->db->get('persona')->row();
    }

    function insert($registro) {
        $this->db->set($registro);
        $this->db->insert('persona');
    }

    function update($registro) {
        $this->db->set($registro);
        $this->db->where('id', $registro['id']);
        $this->db->update('persona');
    }

    function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('persona');
    }

    function get_bases() {
        $lista = array();
        $this->load->model('Model_Base');
        $registros = $this->Model_Base->all();
        foreach ($registros as $registro) {
            $lista[$registro->id] = $registro->nombre;
        }
        return $lista;
    }

    function get_areas() {
        $lista = array();
        $this->load->model('Model_Area');
        $registros = $this->Model_Area->all();
        foreach ($registros as $registro) {
            $lista[$registro->id] = $registro->nombre;
        }
        return $lista;
    }


}
