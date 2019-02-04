<?php 

	include '..\..\libraries\fpdf\plantilla.php';
    include '..\..\db\conecta.php';
    
 $id_prog=$_POST['id_programa'];
 
       
	$stm = $db->prepare("SELECT personas.paterno,personas.materno,personas.nombres,personas.edad,domicilio.calle,domicilio.num_exterior,domicilio.num_int,domicilio.calle1,domicilio.calle2,domicilio.barrio,personas.telefono,personas.fecha_ingreso FROM personas,domicilio where personas.id_domicilio=domicilio.id_domicilio and personas.id_programa=:id_programa");
    $stm->bindParam("id_programa", $id_prog,PDO::PARAM_STR) ;
	$stm->execute();
    $r2 = $stm->fetchAll(PDO::FETCH_ASSOC); 

	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();

	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(42,6, '', 0, 1, 'C');
	$pdf->Cell(42,6, '', 0, 1, 'C');
	$pdf->Cell(42,6, 'Programa', 1, 0, 'C');

	$pdf->Cell(50,6, utf8_decode($alm->__GET('programa')), 1, 1, 'C');
	$pdf->Cell(38,6, '', 0, 1, 'C');
	$pdf->Cell(42,6, '', 0, 1, 'C');
	$pdf->Cell(190, 6, 'Datos generales', 1, 1, 'C');

	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(25,6, 'Folio', 1, 0, 'C');
	$pdf->Cell(38,6, 'Tipo de curso', 1, 0, 'C');
	$pdf->Cell(38,6, 'Fecha de inicio', 1, 0, 'C');
	$pdf->Cell(48,6, 'Fecha de finalizacion', 1, 0, 'C');
	$pdf->Cell(41,6, 'Imparte', 1, 1, 'C');

	$pdf->SetFont('Arial','',10);
	$cont=0;
	
		++$cont;
		$pdf->Cell(25,6, utf8_decode($alm->__GET('folio_programa')), 1, 0, 'C');
		$pdf->Cell(38,6, utf8_decode($alm->__GET('tipo')), 1, 0, 'C');
		$pdf->Cell(38,6, utf8_decode($alm->__GET('fecha_inicio')), 1, 0, 'C');
		$pdf->Cell(48,6, utf8_decode($alm->__GET('fecha_termina')), 1, 0, 'C');
		$pdf->Cell(41,6, utf8_decode($alm->__GET('imparte')), 1, 1, 'C');
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(38,6, '', 0, 1, 'C');
	$pdf->Cell(42,6, '', 0, 1, 'C');
    $pdf->Cell(42,6, '', 0, 1, 'C');
	$pdf->Cell(42,6, 'total de inscripciones', 1, 1, 'C');
	$pdf->Cell(42,6,utf8_decode($alm1->__GET('total')), 1, 1, 'C');

	$pdf->Cell(42,6, '', 0, 1, 'C');
	$pdf->Cell(190, 6, 'Personas registradas', 1, 1, 'C');
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(10,6, 'N', 1, 0, 'C');
	$pdf->Cell(70,6, 'NOMBRE COMPLETO', 1, 0, 'C');
	$pdf->Cell(25,6, 'EDAD', 1, 0, 'C');
	$pdf->Cell(40,6, 'TELEFONO', 1, 0, 'C');
	$pdf->Cell(45,6, 'BARRIO/COLONIA', 1, 1, 'C');

	$pdf->SetFont('Arial','',10);
	
if (count($r2)>0) {
	$cont=0;
foreach ($r2 as $row) {
++$cont;
		$pdf->Cell(10,6, $cont, 1, 0, 'C');
		$pdf->Cell(70,6,utf8_decode($row['paterno']).' '.utf8_decode($row['materno']).' '.utf8_decode($row['nombres']), 1, 0, 'C');
	$pdf->Cell(25,6, utf8_decode($row['edad']), 1, 0, 'C');
	$pdf->Cell(40,6, utf8_decode($row['telefono']), 1, 0, 'C');
	$pdf->Cell(45,6,utf8_decode($row['barrio']), 1, 1, 'C');
}
	
} else {
	$pdf->Cell(190, 6, 'No tiene registros asignados', 1, 1, 'C');
}
	$pdf->Output();
?>
