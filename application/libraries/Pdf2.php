<?php

require(dirname(__FILE__).'/Fpdf/fpdf.php');

class Pdf2 extends FPDF {

	function Header($a = 'prueba')
	{
		$this->Image(base_url().'/img/logo1.JPG', 10, 8, 40);
		$this->SetFont('Arial', 'B', 15);
		$this->Cell(50);
		$this->Cell(90, 20, 'Reporte de Personal', 0, 1);
		$this->SetFont('', '', 10); 
		$this->Cell(50);
		$this->Cell(90, 8, 'Mantenimiento de registros');
		$this->Ln(20);
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
				$this->Cell(40, 12, $col, 1);
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

