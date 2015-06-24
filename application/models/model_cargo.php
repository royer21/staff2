<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Cargo extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function all() {
        $query = $this->db->get('cargo');
        return $query->result();
    }

    function allFiltered($field, $value) {
        $this->db->like($field, $value);
        $query = $this->db->get('cargo');
        if ($query->result()>0) {
            return $query->result();
        }else{
            return FALSE ; 
        }
    
    }

    function totalResultados($field, $value) {
        $this->db->like($field, $value);
        $query = $this->db->get('cargo');
        if ($query->result()>0) {
            return $query->num_rows();
        }else{
            return FALSE ; 
        }
    
    }


    function find($id) {
        $this->db->where('id', $id);
        return $this->db->get('cargo')->row();
    }

    function insert($registro) {
        $this->db->set($registro);
        $this->db->insert('cargo');
    }

    function update($registro) {
        $this->db->set($registro);
        $this->db->where('id', $registro['id']);
        $this->db->update('cargo');
    }

    function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('cargo');
    }

}
