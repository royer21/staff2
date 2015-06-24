<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Base extends CI_Controller {

	// Constructor de la clase
	function __construct() {
		parent::__construct();

		$this->load->model('Model_Base');
	
    }

	public function index() {
		$data['contenido'] = 'base/index';
		$data['titulo'] = 'Base';
		$value = $this->input->post('buscar');
		$data['query'] = $this->Model_Base->allFiltered('base.nombre', $value);
		$data['value'] = $value;
		//$data['query'] = $this->Model_Base->all();
		$this->load->view('header', $data);
		$this->load->view('template', $data);
		$this->load->view('footer', $data);
	}

	public function pdf($value="") {
		$data['contenido'] = 'base/index';
		$data['titulo'] = 'Base';
		$data['value'] = $value;
		$data['query'] = $this->Model_Base->allFiltered('base.nombre', $value);
		$this->load->view('base/vistapdf', $data);
	}


	public function search($mensajito='holamundo') {
		//$data['busqueda'] = $busqueda;
		$data['contenido'] = 'base/index';
		$data['titulo'] = 'Base';
		$this->load->view('header', $data);
		$this->load->view('template', $data);
		$this->load->view('footer', $data);	
	}

	public function create() {
		$data['contenido'] = 'base/create';
		$data['titulo'] = 'Crear Base';
		
		$this->load->view('header', $data);
		$this->load->view('template', $data);
		$this->load->view('footer', $data);	
	}

	public function insert() {
		$registro = $this->input->post();

			$registro['nombre'] = ($registro['nombre']);
			$registro['ubicacion'] = ($registro['ubicacion']);
			$registro['jefe'] = ($registro['jefe']);

			$this->Model_Base->insert($registro);
			redirect('base/index');
        
	}

	public function edit($id) {
		// $id = $this->uri->segment(3);
		$data['contenido'] = 'base/edit';
		$data['titulo'] = 'Actualizar Base';
		$data['registro'] = $this->Model_Base->find($id);
		
		$this->load->view('header', $data);
		$this->load->view('template', $data);
		$this->load->view('footer', $data);	
	}

	public function update() {
		$registro = $this->input->post();

			
			$this->Model_Base->update($registro);
			redirect('base/index');
		
	}

	public function delete($id) {
		$this->Model_Base->delete($id);
		redirect('base/index');
	}

	public function vista() {
		
		redirect('base/impre');
	}

	public function generapdf($peticion="")
	{
		$titulo = 'Mititulo1';
		$data = $this->Model_Base->allFiltered('base.nombre', $peticion);

		return $this->generaReporte($data, $titulo);

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

		$header = array('N°', 'Nombre', 'Ubicación', 'Presidente(a)', 'Celular');
		$w = array(10, 80, 80, 80, 25);

		$pdf->SetFont('Arial','B', 10);
		for ($i=0; $i<count($header);$i++)
			$pdf->Cell($w[$i], 8, utf8_decode($header[$i]), 1, 0, 'C');
		$pdf->Ln();

		$pdf->SetFont('Arial', '', 12);
		foreach ($data as $row)
		{
			$pdf->Cell($w[0], 6, utf8_decode($row->orden), 1);
			$pdf->Cell($w[1], 6, utf8_decode($row->nombre), 1);
			$pdf->Cell($w[2], 6, utf8_decode($row->ubicacion), 1);
			$pdf->Cell($w[3], 6, utf8_decode($row->jefe), 1);
			$pdf->Cell($w[4], 6, utf8_decode($row->celular), 1);
			$pdf->Ln();
		}

		$pdf->Cell(array_sum($w), 0, '', 'T');

		$pdf->Output();
	}
	
}
