<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Base extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function all() {
        
       
        $this->db->order_by('base.orden','asc');
        $query = $this->db->get('base');
         return $query->result();
        
    }

    function allFiltered($field, $value) {
        $this->db->like($field, $value);
        $this->db->order_by('base.orden','asc');
        $query = $this->db->get('base');
        if ($query->result()>0) {
            return $query->result();
        }else{
            return FALSE ; 
        }
    
    }

    function totalResultados($field, $value) {
        $this->db->like($field, $value);
        $query = $this->db->get('base');

        $this->db->order_by('orden', 'asc');
        if ($query->result()>0) {
            return $query->num_rows();
        }else{
            return FALSE ; 
        }
    
    }


    function find($id) {
        $this->db->where('id', $id);
        return $this->db->get('base')->row();
    }

    function insert($registro) {
        $this->db->set($registro);
        $this->db->insert('base');
    }

    function update($registro) {
        $this->db->set($registro);
        $this->db->where('id', $registro['id']);
        $this->db->update('base');
    }

    function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('base');
    }

}
