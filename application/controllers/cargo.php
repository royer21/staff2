<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cargo extends CI_Controller {

	// Constructor de la clase
	function __construct() {
		parent::__construct();

		$this->load->model('Model_Cargo');
	
    }

	public function index() {
		$data['contenido'] = 'cargo/index';
		$data['titulo'] = 'Cargo';
		$data['query'] = $this->Model_Cargo->all();
		$this->load->view('header', $data);
		$this->load->view('template', $data);
		$this->load->view('footer', $data);	
	}


	public function search() {
		$data['contenido'] = 'cargo/index';
		$data['titulo'] = 'Cargo';
		$value = $this->input->post('buscar');
		$data['query'] = $this->Model_Cargo->allFiltered('cargo.nombre', $value);
		$this->load->view('header', $data);
		$this->load->view('template', $data);
		$this->load->view('footer', $data);	
	}

	public function create() {
		$data['contenido'] = 'cargo/create';
		$data['titulo'] = 'Crear Cargo';
		
		$this->load->view('header', $data);
		$this->load->view('template', $data);
		$this->load->view('footer', $data);	
	}

	public function insert() {
		$registro = $this->input->post();

			$registro['nombre'] = ($registro['nombre']);
			
			$this->Model_Cargo->insert($registro);
			redirect('cargo/index');
        
	}

	public function edit($id) {
		// $id = $this->uri->segment(3);
		$data['contenido'] = 'cargo/edit';
		$data['titulo'] = 'Actualizar Cargo';
		$data['registro'] = $this->Model_Cargo->find($id);
		
		$this->load->view('header', $data);
		$this->load->view('template', $data);
		$this->load->view('footer', $data);	
	}

	public function update() {
		$registro = $this->input->post();

			
			$this->Model_Cargo->update($registro);
			redirect('cargo/index');
		
	}

	public function delete($id) {
		$this->Model_Cargo->delete($id);
		redirect('cargo/index');
	}

}
