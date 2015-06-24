<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Agenda extends CI_Controller {

	// Constructor de Clase
	function __construct() {
		parent::__construct();

		$this->load->model('Model_Agenda');
		$this->load->library('agendaLib');
		$this->load->library('pagination');
		$this->form_validation->set_message('required', 'Debe ingresar un valor para %s');
		$this->form_validation->set_message('norep', 'Existe un registro con el mismo %s');
	}



	public function index() {

		$inicio= 0;
		$limite= 1;
		
			
	
		$config['base_url']=base_url().'Agenda/index/';
		$config['total_rows']= count($this->Model_Agenda->allfiltered_index());
		$config['per_page']=2;
		$config['uri_segment']=2;
		$config['first_page']=base_url().'Agenda/index/';
		
		$this->pagination->initialize($config);


		$data['query'] = $this->Model_Agenda->allfiltered_index($inicio,$limite);	
		$data['contenido'] = 'agenda/index';
		$data['titulo'] = 'Agenda';
	
		
		$this->load->view('header', $data);
		$this->load->view('template', $data);
		$this->load->view('footer', $data);	
	}
	

	public function search() {
		$data['contenido'] = 'agenda/index';
		$data['titulo'] = 'Actividades';
		$value = $this->input->post('buscar');
		$data['query'] = $this->Model_Agenda->allfiltered('evento',$value);	
		$this->load->view('header', $data);
		$this->load->view('template', $data);
		$this->load->view('footer', $data);	
	}

	public function search_month_year() {
		
		$data['contenido'] = 'agenda/index';
		$data['titulo'] = 'Actividades';
		$mes= $this->input->post('mes');
		$year = $this->input->post('year');
		$data['query'] = $this->Model_Agenda->mesano($mes,$year);	
		$this->load->view('header', $data);
		$this->load->view('template', $data);
		$this->load->view('footer', $data);	
	}

	public function next_events(){
		

        $data['contenido'] = 'agenda/next_events';
		$data['titulo'] = 'Actividades';
		$data['query']=$this->Model_Agenda->next_events();
        $this->load->view('header', $data);
		$this->load->view('template', $data);
		$this->load->view('footer', $data);
	}

 
	public function search_year() {
		
		$data['contenido'] = 'agenda/index';
		$data['titulo'] = 'Actividades';
		$value = $this->input->post('year');
		$data['query'] = $this->Model_Agenda->mesano($value);	
		$this->load->view('header', $data);
		$this->load->view('template', $data);
		$this->load->view('footer', $data);	
	}


	public function create(){
		//$id = $this->uri->segment(3);
		$data['contenido'] = 'Agenda/create';
		$data['titulo'] = 'Crear Nueva Actividad';
		//$data['registro'] = $this->Model_Perfil->find($id);

		$this->load->view('header', $data);
		$this->load->view('template', $data);
		$this->load->view('footer', $data);	
	}

	public function insert(){
		//$id = $this->uri->segment(3);
		$registro = $this->input->post();	
		
		$this->form_validation->set_rules('procedencia', 'procedencia', 'required');
		$this->form_validation->set_rules('evento', 'evento', 'required');	
		$this->form_validation->set_rules('ambito', 'ambito', 'required');	
		$this->form_validation->set_rules('tipo', 'tipo', 'required');			
		$this->form_validation->set_rules('categoria', 'categoria', 'required');	
		$this->form_validation->set_rules('fecha', 'fecha', 'required');	
		$this->form_validation->set_rules('hora', 'hora', 'required');	
		$this->form_validation->set_rules('duracion', 'duracion', 'required');	
		$this->form_validation->set_rules('lugar', 'lugar', 'required');	
		$this->form_validation->set_rules('descripcion', 'descripcion', 'required');	
		if ($this->form_validation->run()==FALSE) {
			$this->create();
		}
		else{
			$registro['created'] = date('Y/m/d H:i');
			$registro['updated'] = date('Y/m/d H:i');
			$this->Model_Agenda->insert($registro);
			redirect('agenda/index');
		}
	}

	public function edit($id){
		//$id = $this->uri->segment(3);
		//if () depende del usuario 
	// hacer como variable --..CON IF $editable $uneditable..enviar deacuerdo  A USUARIO
		$registro = $this->Model_Agenda->find($id);

		if($this->session->userdata('usuario_id')!==$registro->usuario_id)
		{

			$data['contenido']='home/acceso_denegado';
			$data['titulo'] = 'Actualizar Agenda';

			$this->load->view('header', $data);
			$this->load->view('template', $data);
			$this->load->view('footer', $data);	

		}
		
		else{

		$data['contenido'] = 'agenda/edit';
		$data['titulo'] = 'Actualizar Agenda';
		$data['registro'] = $registro;

		$this->load->view('header', $data);
		$this->load->view('template', $data);
		$this->load->view('footer', $data);	


		}
		
	}

	public function update(){
		$registro = $this->input->post();

		//$this->form_validation->set_rules('name', 'Nombre', 'required|callback_norep');
		$this->form_validation->set_rules('procedencia', 'procedencia', 'required|callback_norep');
		$this->form_validation->set_rules('evento', 'evento', 'required|callback_norep');	
		$this->form_validation->set_rules('ambito', 'ambito', 'required|callback_norep');	
		$this->form_validation->set_rules('tipo', 'tipo', 'required|callback_norep');			
		$this->form_validation->set_rules('categoria', 'categoria', 'required|callback_norep');	
		$this->form_validation->set_rules('fecha', 'fecha', 'required|callback_norep');	
		$this->form_validation->set_rules('hora', 'hora', 'required|callback_norep');	
		$this->form_validation->set_rules('duracion', 'duracion', 'required|callback_norep');	
		$this->form_validation->set_rules('lugar', 'lugar', 'required|callback_norep');	
		$this->form_validation->set_rules('descripcion', 'descripcion', 'required|callback_norep');	
		// $this->form_validation->set_rules('password', 'Clave', 'required'); // por si existe mas campos
		if($this->form_validation->run() == FALSE) {
			$this->edit($registro['id'] );
		}
		else {
			$registro['updated'] = date('Y/m/d H:i');
			$this->Model_Agenda->update($registro); 
			redirect('agenda/index');
		}


	}

	public function delete($id){
		$this->Model_Agenda->delete($id);
		redirect('agenda/index');
	}

	public function detalles($id){
		$data['contenido'] = 'agenda/detalles';
		$data['titulo'] = 'Detalles Agenda';
		$data['registro'] = $this->Model_Agenda->find($id);

		$this->load->view('header', $data);
		$this->load->view('template', $data);
		$this->load->view('footer', $data);	
	}
	public function asistencia() {
		$data['contenido'] = 'agenda/asistencia';
		$data['titulo'] = 'Agenda';
		$data['query'] = $this->Model_Agenda->all();	
		$this->load->view('header', $data);
		$this->load->view('template', $data);
		$this->load->view('footer', $data);	
	}
	public function asist() {
		$data['contenido'] = 'agenda/asist';
		$data['titulo'] = 'Agenda';
		$data['query'] = $this->Model_Agenda->allfiltered('asistencia','si');	
		$this->load->view('header', $data);
		$this->load->view('template', $data);
		$this->load->view('footer', $data);	
	}
	public function no_asist() {
		$data['contenido'] = 'agenda/no_asist';
		$data['titulo'] = 'Agenda';
		$data['query'] = $this->Model_Agenda->allfiltered('asistencia','no');	
		$this->load->view('header', $data);
		$this->load->view('template', $data);
		$this->load->view('footer', $data);	
	}

}
