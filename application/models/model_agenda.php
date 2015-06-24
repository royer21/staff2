<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Agenda extends CI_Model {

	function __construct() {
		parent::__construct();
        
    }

    function all() {

        $query = $this->db->get('agenda');
        return $query->result();
        $this->db->order_by("fecha","desc");
    }

    function allfiltered_index($inicio=FALSE,$limite=FALSE) {
        $this->db->order_by('fecha','desc');
        $this->db->like('asistencia','si');
        $query = $this->db->get('agenda');
        return $query->result();
    }

    function allfiltered($field,$value) {
    	$this->db->like($field,$value);
        $query = $this->db->get('agenda');
        return $query->result();
    }

    function next_events(){
           
        $fecha_actual = date('Y-m-d');

        $this->db->where('fecha >',$fecha_actual);
        $query = $this->db->get('agenda');
        return $query->result();
    
    }
/* funcion para onsultar por mes y año */
    function mesano($mes, $year) {
        $this->db->where("month(fecha)",$mes) ;
        $this->db->where('year(fecha)',$year) ;
        $query = $this->db->get('agenda');
       
        return $query->result();
    }

    function find($id) {
    	$this->db->where('id', $id);
		return $this->db->get('agenda')->row();
    }

    function insert($registro) {
    	$this->db->set($registro);
		$this->db->insert('agenda');
    }

    function update($registro) {
    	$this->db->set($registro);
		$this->db->where('id', $registro['id']);
		$this->db->update('agenda');
    }

    function delete($id) {
    	$this->db->where('id', $id);
		$this->db->delete('agenda');
    }

}