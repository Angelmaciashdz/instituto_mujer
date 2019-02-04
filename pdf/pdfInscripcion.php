<?php 
include 'plantilla.php';
	include '..\db\conexion.php';
    

	$sql="SELECT personas.*, domicilio.* from personas,domicilio where personas.id_domicilio=domicilio.id_domicilio order by personas.id_persona desc limit 1";
    
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();

	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(10,6, 'N', 1, 0, 'C');
	$pdf->Cell(38,6, 'Nombre', 1, 0, 'C');
	$pdf->Cell(38,6, 'Apellido Paterno', 1, 0, 'C');
	$pdf->Cell(38,6, 'Apellido Materno', 1, 0, 'C');
	$pdf->Cell(33,6, 'Telefono', 1, 0, 'C');
	$pdf->Cell(33,6, 'Barrio', 1, 1, 'C');

	$pdf->SetFont('Arial','',10);
	$cont=0;
	while ($row=$resultado->fetch_assoc())
	{
		++$cont;
		$pdf->Cell(10,6, $cont, 1, 0, 'C');
		$pdf->Cell(38,6, utf8_decode($row['nombre']), 1, 0, 'C');
		$pdf->Cell(38,6, utf8_decode($row['apellidop']), 1, 0, 'C');
		$pdf->Cell(38,6, utf8_decode($row['apellidom']), 1, 0, 'C');
		$pdf->Cell(33,6, utf8_decode($row['telefono']), 1, 0, 'C');
		$pdf->Cell(33,6, utf8_decode($row['barrio']), 1, 1, 'C');
		
	}

	$pdf->Output();


?>