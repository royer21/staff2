<?php

require(dirname(__FILE__).'/Fpdf/fpdf.php');

class PDF extends FPDF {

	function Header($a = 'prueba')
	{
		//$this->SetTextColor(255,192,203);
		$this->Image(base_url().'img/logo2.JPG', 10, 5, 60);
		$this->Image(base_url().'img/logo1.png', 50, 50, 150);
		$this->SetFont('Arial', 'B', 15);
		$this->Cell(110);
		$this->Cell(90, 20, 'Reporte de Personal', 0, 1);
		$this->SetFont('Arial', '', 13);
		$this->Cell(107);
		$this->Cell(90, 1, 'Mantenimiento de Registros');
		$this->Ln(15);
	}

	function Footer()
	{
		$this->SetY(-15);
		$this->SetFont('Arial', 'I', 8);
		$this->Cell(0, 10, utf8_decode('página'.$this->PageNo().'/{nb}'), 0, 0, 'C');
	}

	function BasicTable($header, $data)
	{
		foreach ($header as $col)
			$this->Cell(40, 7, $col, 1);
		$this->Ln();

		foreach ($data as $row)
		{
			foreach ($row as $col)
				$this->Cell(40, 6, $col, 1);
			$this->Ln();
		}
	}

	function setHeader($cabezera)
	{
		foreach ($cabezera as $row)
		{
			$this->Cell(30, 8, $row);
			$this->Ln();
		}
	}
}

