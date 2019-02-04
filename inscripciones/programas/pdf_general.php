<?php 

	include '..\..\libraries\fpdf\plantilla.php';


	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();

	$pdf->SetFont('Arial','B',10);

		$pdf->SetFont('Arial','B',10);
	$pdf->Cell(42,6, '', 0, 1, 'C');
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(7,6, 'N', 1, 0, 'C');
	$pdf->Cell(70,6, 'NOMBRE COMPLETO', 1, 0, 'C');
	$pdf->Cell(33,6, 'Telefono', 1, 0, 'C');
	$pdf->Cell(40,6, 'Barrio/Colonia', 1, 0, 'C');
	$pdf->Cell(35,6, 'Curso/Taller', 1, 1, 'C');
	$cont=0;
		foreach($this->model->ListarPersonas1() as $r):
			++$cont;
				$pdf->SetFont('Arial','',10);
			$pdf->Cell(7,6, $cont, 1, 0, 'C');
$pdf->Cell(70,6, utf8_decode($r->__GET('paterno')).' '. utf8_decode($r->__GET('materno')) .' '. utf8_decode($r->__GET('nombres')), 1, 0, 'C');
$pdf->Cell(33,6, utf8_decode($r->__GET('telefono')), 1, 0, 'C');
$pdf->Cell(40,6, utf8_decode($r->__GET('barrio')), 1, 0, 'C');
$pdf->Cell(35,6, utf8_decode($r->__GET('programa')), 1, 1, 'C');
		endforeach;
	
		
	$pdf->Output();



?>
