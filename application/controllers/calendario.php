<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Calendario extends CI_Controller {

	// Constructor de Clase
	function __construct() {
		parent::__construct();

		//$this->load->model('Model_Agenda');
		$this->load->library('calendar');
		$this->form_validation->set_message('required', 'Debe ingresar un valor para %s');
		
	}

	public function index() {

		$data = array(
                3  => 'http://ejemplo.com/noticias/articulo/2006/03/',
                7  => 'http://ejemplo.com/noticias/articulo/2006/07/',
                13 => 'http://ejemplo.com/noticias/articulo/2006/13/',
                26 => 'http://ejemplo.com/noticias/articulo/2006/26/'
              );

		$data['contenido'] = 'calendario/index';
		$data['titulo'] = 'Inicio';
		$this->load->view('header', $data);
		$this->load->view('template', $data);
		$this->load->view('footer', $data);	

		
	}

}

?>d