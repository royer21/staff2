<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Area extends CI_Controller {

	// Constructor de la clase
	function __construct() {
		parent::__construct();

		$this->load->model('Model_Area');
	
    }

	public function index() {
		$data['contenido'] = 'area/index';
		$data['titulo'] = 'area';
		$data['query'] = $this->Model_Area->all();
		$this->load->view('header', $data);
		$this->load->view('template', $data);
		$this->load->view('footer', $data);	
	}


	public function search() {
		$data['contenido'] = 'area/index';
		$data['titulo'] = 'Area';
		$value = $this->input->post('buscar');
		$data['query'] = $this->Model_Area->allFiltered('area.nombre', $value);
		$this->load->view('header', $data);
		$this->load->view('template', $data);
		$this->load->view('footer', $data);	
	}

	public function create() {
		$data['contenido'] = 'area/create';
		$data['titulo'] = 'Crear Area';
		
		$this->load->view('header', $data);
		$this->load->view('template', $data);
		$this->load->view('footer', $data);	
	}

	public function insert() {
		$registro = $this->input->post();

			$registro['nombre'] = ($registro['nombre']);
			
			$this->Model_Area->insert($registro);
			redirect('area/index');
        
	}

	public function edit($id) {
		// $id = $this->uri->segment(3);
		$data['contenido'] = 'area/edit';
		$data['titulo'] = 'Actualizar Area';
		$data['registro'] = $this->Model_Area->find($id);
		
		$this->load->view('header', $data);
		$this->load->view('template', $data);
		$this->load->view('footer', $data);	
	}

	public function update() {
		$registro = $this->input->post();

			
			$this->Model_Area->update($registro);
			redirect('area/index');
		
	}

	public function delete($id) {
		$this->Model_Area->delete($id);
		redirect('area/index');
	}

}
