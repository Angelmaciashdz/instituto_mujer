<?php 

	require '../libraries/fpdf/fpdf.php';

	
	class PDF extends FPDF
	{
		
		function Header()
		{
			date_default_timezone_set("America/Mexico_City");
			$this->Image('./assets/img/h3.png', 10, 6, 25);
			$this->Image('./assets/img/logo.png', 174, 7, 25);
			$this->SetFont('Arial','B',15);
			$this->Cell(30);
			$this->Cell(130, 20, 'Reporte del Instituto Municipal de la Mujer', 0, 0, 'C');
			//$this->Cell(-130, 30, 'Fecha: '.date('d-m-Y').' Hora: '.date('h:ia'), 0, 0, 'C');

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