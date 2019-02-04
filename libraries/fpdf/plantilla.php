<?php 

	require 'fpdf.php';
	
	class PDF extends FPDF
	{
		
		function Header()
		{
			date_default_timezone_set("America/Mexico_City");
	        $this->Image('..\..\public\imagenes\logos\g1.jpg', 10, 6, 25);
			$this->Image('..\..\public\imagenes\logos\logo.png', 40, 7, 25);
			$this->SetFont('Arial','B',15);
			$this->Cell(30);
			$this->Cell(130, 10, 'Instituto Municipal de la Mujer', 0, 0, 'C');
			$this->Cell(-133, 36, 'Reporte de Total Inscripciones ', 0, 0, 'C');
			$this->Image('..\..\public\imagenes\logos\h3.png', 144, 6, 25);
			$this->Image('..\..\public\imagenes\logos\mujer1.jpg', 174, 7, 25);

			$this->Ln(20);
		}

		function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
			$this->Cell(-50, 10, 'Fecha: '.date('d-m-Y').' Hora: '.date('h:ia'), 0, 0, 'C');

		}

	}

?>

