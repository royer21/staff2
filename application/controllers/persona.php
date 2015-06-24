<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Persona extends CI_Controller {

	// Constructor de la clase
	function __construct() {
		parent::__construct();

		$this->load->model('Model_Persona');
		
    }

	public function index() {
		$data['contenido'] = 'persona/index';
		$data['titulo'] = 'Persona';
		$data['query'] = $this->Model_Persona->all();
		$value=null;
		$data['value'] = $value;
		$this->load->view('header', $data);
		$this->load->view('template', $data);
		$this->load->view('footer', $data);	
	}

	public function search() {
		$data['contenido'] = 'persona/index';
		$data['titulo'] = 'Persona';
		$value = $this->input->post('buscar');
		$data['query'] = $this->Model_Persona->allFiltered('persona.nombres', $value);
		$data['value'] = $value;
		// si num rows 	if ($data['datos']!== fam_close(fam) ) {
		//	echo "Se encontraron registros " ; 
		//}else{
       	//	echo 'No hay resultados';
     	//} 
		$this->load->view('header', $data);
		$this->load->view('template', $data);
		$this->load->view('footer', $data);	
	}

	public function search_base() {
		$data['contenido'] = 'persona/index';
		$data['titulo'] = 'Pesonal Bases';
		$value = $this->input->post('buscar_base');
		$data['value'] = $value;
		$data['query'] = $this->Model_Persona->allFiltered_base($value);
		$this->load->view('header', $data);
		$this->load->view('template', $data);
		$this->load->view('footer', $data);	
	}

	public function search_area() {
		$data['contenido'] = 'persona/index';
		$data['titulo'] = 'Personal Areas';
		$value = $this->input->post('buscar_area');
		$data['value'] = $value;
		$data['query'] = $this->Model_Persona->allFiltered_area($value);
		$this->load->view('header', $data);
		$this->load->view('template', $data);
		$this->load->view('footer', $data);	
	}

	public function create() {
		$data['contenido'] = 'persona/create';
		$data['titulo'] = 'Crear Usuario';
		$data['bases'] = $this->Model_Persona->get_bases(); /* Lista de los Perfiles */
		$data['areas'] = $this->Model_Persona->get_areas(); /* Lista de los Perfiles */
		$this->load->view('header', $data);
		$this->load->view('template', $data);
		$this->load->view('footer', $data);	
	}

	public function insert() {
		$registro = $this->input->post();

		   	
			//$registro['dni'] = ($registro['dni']); 
			//$registro['nombres'] = ($registro['nombres']);
			//$registro['apellido_pat'] = ($registro['apellido_pat']);
			//$registro['apellido_mat'] = ($registro['apellido_mat']);
			//$registro['telefono'] = ($registro['telefono']);
			//$registro['ocupacion'] = ($registro['ocupacion']);
			//$registro['cargo'] = ($registro['cargo']);
			//$registro['estado'] = ($registro['estado']);
			//$registro['fecha_inicio'] = ($registro['fecha_inicio']);
			//$registro['tiempo_empleo'] = ($registro['tiempo_empleo']);
			//$registro['observacion'] = ($registro['observacion']);
			//$registro['base_id'] = ($registro['base_id']);
			//$registro['area_id'] = ($registro['area_id']);

			$this->Model_Persona->insert($registro);
			redirect('persona/index');
        
	}

	public function edit($id) {
		// $id = $this->uri->segment(3);
		$data['contenido'] = 'persona/edit';
		$data['titulo'] = 'Actualizar Usuario';
		$data['registro'] = $this->Model_Persona->find($id);

		$data['areas'] = $this->Model_Persona->get_areas(); /* Lista de los Menu */
		$data['bases'] = $this->Model_Persona->get_bases(); /* Lista de los Perfiles */
		
		$this->load->view('header', $data);
		$this->load->view('template', $data);
		$this->load->view('footer', $data);	
	}

	public function update() {
		$registro = $this->input->post();
			
			$this->Model_Persona->update($registro);
			redirect('persona/index');
		
	}

	public function delete($id) {
		$this->Model_Persona->delete($id);
		redirect('persona/index');
	}

	public function pdf($value="") {
		$data['contenido'] = 'persona/index';
		$data['titulo'] = 'persona';
		$data['value'] = $value;
		$data['query'] = $this->Model_Persona->allFiltered('persona.nombres', $value);
		$this->load->view('persona/vista', $data);
	}

	public function pdf2($value="") {
		$data['contenido'] = 'persona/index';
		$data['titulo'] = 'persona';
		$data['value'] = $value;
		$data['query'] = $this->Model_Persona->allFiltered_base('area.nombre',$value);
		$this->load->view('persona/vista', $data);
	}

	public function pdf3($value="") {
		$data['contenido'] = 'persona/index';
		$data['titulo'] = 'persona';
		$data['value'] = $value;
		$data['query'] = $this->Model_Persona->allFiltered_area('base.nombre',$value);
		$this->load->view('persona/vista', $data);
	}

	public function vista() {
		
		redirect('base/impre');
	}

	public function generapdf($peticion="")
	{
		$titulo = 'Mititulo1';
		$data = $this->Model_Persona->allFiltered('persona.nombres', $peticion);

		return $this->generaReporte($data, $titulo);

	}

	public function generapdfarea($peticion="")
	{

		$titulo = "Lista de los Trabajadores en el Area de : ".$peticion;
		$data = $this->Model_Persona->allFiltered_area('area.nombre',$peticion);

		return $this->generaReporteArea($data, $titulo);

	}
	public function generapdfbase($peticion="")
	{
		$titulo = 'Mititulo1';
		$data = $this->Model_Persona->allFiltered('base.nombre', $peticion);

		return $this->generaReporte($data, $titulo);

	}

	protected function generaReporteArea($data, $titulo = '')
	{
		$this->load->library('Pdf');

		$pdf = new PDF('L', 'mm', 'A4');
		$pdf->AliasNbPages();
		$pdf->AddPage();
		$pdf->SetFont('Arial', '', 15);

		if ($titulo != '')
		{
			
			$pdf->Cell(15, 10, $titulo);
			$pdf->Ln();
			$pdf->Ln();
		}

		$header = array('#','Base', 'DNI', 'Nombres', 'A.Paterno','A.Materno','Est.','Cargo','Fecha Ini','T.Empleo');
		$w = array(10,50,17,40,30,30,8,55,18,15,0,1,2,3,4,5,6,7,8,9);

		$pdf->SetFont('Arial','B', 8);
		for ($i=0; $i<count($header);$i++)
			$pdf->Cell($w[$i], 8, utf8_decode($header[$i]), 1, 0, 'C');
		$pdf->Ln();

		$pdf->SetFont('Arial', '', 8);

		
		$k=1;
		foreach ($data as $row)
		{
			$pdf->Cell($w[0], 6, utf8_decode($k), 1);
			$pdf->Cell($w[1], 6, utf8_decode($row->base_nombre), 1);
			$pdf->Cell($w[2], 6, utf8_decode($row->dni), 1);
			$pdf->Cell($w[3], 6, utf8_decode($row->nombres), 1);
			$pdf->Cell($w[4], 6, utf8_decode($row->apellido_pat), 1);
			$pdf->Cell($w[5], 6, utf8_decode($row->apellido_mat), 1);
			//$pdf->Cell($w[5], 6, utf8_decode($row->telefono), 1);
			//$pdf->Cell($w[6], 6, utf8_decode($row->ocupacion), 1);
			$pdf->Cell($w[6], 6, utf8_decode($row->estado), 1);	
			//$pdf->Cell($w[5], 6, utf8_decode($row->area_nombre), 1);		
			$pdf->Cell($w[7], 6, utf8_decode($row->cargo), 1);
			$pdf->Cell($w[8], 6, utf8_decode($row->fecha_inicio), 1);
			$pdf->Cell($w[9], 6, utf8_decode($row->tiempo_empleo), 1);

			$pdf->Ln();
			$k++;
		}

		$pdf->Cell(array_sum($w), 0, '');

		$pdf->Output();
	}


	protected function generaReporte($data, $titulo = '')
	{
		$this->load->library('Pdf');

		$pdf = new PDF('L', 'mm', 'A4');
		$pdf->AliasNbPages();
		$pdf->AddPage();
		$pdf->SetFont('Arial', '', 10);

		//if ($titulo != '')
		//{
		//	$pdf->Cell(40, 10, $titulo, 1);
		//	$pdf->Ln();
		//	$pdf->Ln();
		//}
		$header = array('#','Base', 'DNI', 'Nombres', 'A.Paterno','A.Materno','Celular','Est','Area','Cargo','Fecha Ini','T.Emp.');
		$w = array(5,40,13,20,20,20,14,5,60,45,15,10
			       ,0,1,2,3,4,5,6,7,8,9,10,11);

		$pdf->SetFont('Arial','B', 7);
		for ($i=0; $i<count($header);$i++)
			$pdf->Cell($w[$i], 8, utf8_decode($header[$i]), 1, 0, 'C');
		$pdf->Ln();

		$pdf->SetFont('Arial', '', 7);

		$j=1;
		
		foreach ($data as $row)
		{	
			$pdf->Cell($w[0], 6, utf8_decode($j), 1);
			$pdf->Cell($w[1], 6, utf8_decode($row->base_nombre), 1);
			$pdf->Cell($w[2], 6, utf8_decode($row->dni), 1);
			$pdf->Cell($w[3], 6, utf8_decode($row->nombres), 1);
			$pdf->Cell($w[4], 6, utf8_decode($row->apellido_pat), 1);
			$pdf->Cell($w[5], 6, utf8_decode($row->apellido_mat), 1);
			$pdf->Cell($w[6], 6, utf8_decode($row->telefono), 1);
			//$pdf->Cell($w[7], 6, utf8_decode($row->ocupacion), 1);
			$pdf->Cell($w[7], 6, utf8_decode($row->estado), 1);
			$pdf->Cell($w[8], 6, utf8_decode($row->area_nombre), 1);
			$pdf->Cell($w[9], 6, utf8_decode($row->cargo), 1);
			$pdf->Cell($w[10], 6, utf8_decode($row->fecha_inicio), 1);
			$pdf->Cell($w[11], 6, utf8_decode($row->tiempo_empleo), 1);

			$pdf->Ln();
			$j++;
		}

		$pdf->Cell(array_sum($w), 0, '');

		$pdf->Output();
	}


}
