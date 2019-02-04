<?php 

	require '..\..\libraries\PHPExcel.php';
	    include '..\..\db\conecta.php';

  $id_programa=$_POST['id_programa'];
 if ($id_programa >0) {
 
 $stm = $db->prepare("SELECT programa from programa where id_programa=:id_programa");
 $stm->bindParam("id_programa", $id_programa,PDO::PARAM_STR) ;
 $stm->execute();
 $r = $stm->fetchAll(PDO::FETCH_ASSOC); 
 
 $stm1 = $db->prepare("SELECT programa.id_programa,programa.folio_programa,programa.programa,tipo_programa.tipo,programa.fecha_inicio,programa.fecha_termina,programa.imparte,programa.imagen FROM programa,tipo_programa where programa.tipo_programa=tipo_programa.id_tipo and programa.id_programa=:id_programa");
 $stm1->bindParam("id_programa", $id_programa,PDO::PARAM_STR) ;
 $stm1->execute();
 $r1 = $stm1->fetchAll(PDO::FETCH_ASSOC); 

 $stm2 = $db->prepare("SELECT COUNT(id_persona) as total  from personas where id_programa=:id_programa");
 $stm2->bindParam("id_programa", $id_programa,PDO::PARAM_STR) ;
 $stm2->execute();
 $r2 = $stm2->fetchAll(PDO::FETCH_ASSOC); 

 $stm3 = $db->prepare("SELECT personas.paterno,personas.materno,personas.nombres,personas.curp,personas.ine,personas.edad,domicilio.calle,domicilio.num_exterior,domicilio.num_int,domicilio.calle1,domicilio.calle2,domicilio.barrio,personas.telefono,personas.fecha_ingreso,programa.programa FROM personas,domicilio,programa where personas.id_programa=programa.id_programa and personas.id_domicilio=domicilio.id_domicilio and personas.id_programa=:id_programa");
 $stm3->bindParam("id_programa", $id_programa,PDO::PARAM_STR) ;
 $stm3->execute();
 $r3 = $stm3->fetchAll(PDO::FETCH_ASSOC); 

    $fila=12;

	$objPHPExcel = new PHPExcel();

	$objPHPExcel->getProperties()
	->setCreator('Instituto de la Mujer')
	->setDescription('Reporte de personas');

	$objPHPExcel->setActiveSheetIndex(0);

foreach ($r as $row) {
header('Content-Disposition: attachment;filename="Reporte'.' '.$row['programa'].'.xls"');	
}


foreach ($r1 as $row1)
	{
$objPHPExcel->getActiveSheet()->setTitle($row1['programa']);
	


	$estiloTituloReporte = array(
    'font' => array(
	'name'      => 'Arial',
	'size' =>12
    ),
	);
	

	$estiloTituloColumnas = array(
    'font' => array(
	'name'  => 'Arial',
	'bold'  => true,
	'size' =>12,
	'color' => array(
	'rgb' => '000000'
	)
    ),
    'fill' => array(
	'type' => PHPExcel_Style_Fill::FILL_SOLID,
	'color' => array('rgb' => 'FF8800')
    ),
    'borders' => array(
	'allborders' => array(
	'style' => PHPExcel_Style_Border::BORDER_THIN
	)
    ),
    'alignment' =>  array(
	'horizontal'=> PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
	'vertical'  => PHPExcel_Style_Alignment::VERTICAL_CENTER
    )
	);
	
	$estiloInformacion = new PHPExcel_Style();
	$estiloInformacion->applyFromArray( array(
    'font' => array(
	'name'  => 'Arial',
	'size' =>12,
	'color' => array(
	'rgb' => '000000'
	)
    ),
    'fill' => array(
	'type'  => PHPExcel_Style_Fill::FILL_SOLID
	),
    'borders' => array(
	'allborders' => array(
	'style' => PHPExcel_Style_Border::BORDER_THIN
	)
    ),
	'alignment' =>  array(
	'horizontal'=> PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
	'vertical'  => PHPExcel_Style_Alignment::VERTICAL_CENTER
    )
	));

	//$objPHPExcel->getActiveSheet()->getStyle('A2:M6')->applyFromArray($estiloTituloReporte);
	$objPHPExcel->getActiveSheet()->getStyle('A2:A7')->applyFromArray($estiloTituloColumnas);

	$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(45);
	$objPHPExcel->getActiveSheet()->setCellValue('A2','PROGRAMA');
$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(45);
	$objPHPExcel->getActiveSheet()->setCellValue('A3','FOLIO');
	$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(45);
	$objPHPExcel->getActiveSheet()->setCellValue('A4','TIPO DE CURSO');
	$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(45);
	$objPHPExcel->getActiveSheet()->setCellValue('A5','FECHA DE INICIO');
	$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(45);
	$objPHPExcel->getActiveSheet()->setCellValue('A6','FECHA DE FINALIZACION');
	$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(45);
	$objPHPExcel->getActiveSheet()->setCellValue('A7','IMPARTE');


		$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(40);
		$objPHPExcel->setActiveSheetIndex(0)->mergeCells('B2:C2')->setCellValue('B2',$row1['programa']);
		$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(40);
				$objPHPExcel->setActiveSheetIndex(0)->mergeCells('B3:C3')->setCellValue('B3',$row1['folio_programa']);
		$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(40);
				$objPHPExcel->setActiveSheetIndex(0)->mergeCells('B4:C4')->setCellValue('B4',$row1['tipo']);
		$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(40);
				$objPHPExcel->setActiveSheetIndex(0)->mergeCells('B5:C5')->setCellValue('B5',$row1['fecha_inicio']);
		$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(40);
				$objPHPExcel->setActiveSheetIndex(0)->mergeCells('B6:C6')->setCellValue('B6',$row1['fecha_termina']);
		$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(40);
				$objPHPExcel->setActiveSheetIndex(0)->mergeCells('B7:C7')->setCellValue('B7',$row1['imparte']);
	
	$objPHPExcel->getActiveSheet()->setSharedStyle($estiloInformacion, "B2:C7");
	}

$objPHPExcel->getActiveSheet()->getStyle('A9')->applyFromArray($estiloTituloColumnas);

	$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(45);
	$objPHPExcel->getActiveSheet()->setCellValue('A9','TOTAL DE INSCRIPCIONES');

foreach ($r2 as $row2)
	{
		$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(40);
		$objPHPExcel->getActiveSheet()->setCellValue('B9',$row2['total']);
	$objPHPExcel->getActiveSheet()->setSharedStyle($estiloInformacion, "B9");
	}


$objPHPExcel->getActiveSheet()->getStyle('A11:G11')->applyFromArray($estiloTituloColumnas);
		$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(50);
	$objPHPExcel->getActiveSheet()->setCellValue('A11','NOMBRE COMPLETO');
	$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(10);
	$objPHPExcel->getActiveSheet()->setCellValue('B11','EDAD');
	$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(26);
	$objPHPExcel->getActiveSheet()->setCellValue('C11','CURP');
	$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(26);
	$objPHPExcel->getActiveSheet()->setCellValue('D11','CLAVE DE ELECTOR');
	$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(95);
	$objPHPExcel->getActiveSheet()->setCellValue('E11','DOMICILIO');
	$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('F11','TELEFONO');
	$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(33);
	$objPHPExcel->getActiveSheet()->setCellValue('G11','FECHA DE INSCRIPCION');


if (count($r3)>0) {
foreach ($r3 as $row3)
	{
		$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(50);
		$objPHPExcel->getActiveSheet()->setCellValue('A'.$fila,$row3['paterno'].' '.$row3['materno'].' '.$row3['nombres']);
		$objPHPExcel->getActiveSheet()->setCellValue('B'.$fila,$row3['edad']);
		$objPHPExcel->getActiveSheet()->setCellValue('C'.$fila,$row3['curp']);
		$objPHPExcel->getActiveSheet()->setCellValue('D'.$fila,$row3['ine']);
		$objPHPExcel->getActiveSheet()->setCellValue('E'.$fila,'Calle '.$row3['calle'].', Num.'.$row3['num_exterior'].' Ext. '.$row3['num_int'].', entre calle '.$row3['calle1'].' y calle '.$row3['calle2'].', Col. '.$row3['barrio']);
		$objPHPExcel->getActiveSheet()->setCellValue('F'.$fila,$row3['telefono']);
		$objPHPExcel->getActiveSheet()->setCellValue('G'.$fila,$row3['fecha_ingreso']);


		$fila++;
		
	}
} else {
	$objPHPExcel->setActiveSheetIndex(0)->mergeCells('A12:G12')->setCellValue('A12','NO TIENE REGISTROS ASIGNADOS');
}


	$fila = $fila-1;
	
	$objPHPExcel->getActiveSheet()->setSharedStyle($estiloInformacion, "A12:G".$fila);



	header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");


	

	header('Cache-Control: max-age=0');

	$objWriter= PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
	$objWriter->save('php://output');
 } else {

 $stm = $db->prepare("SELECT personas.id_persona,personas.paterno,personas.materno,personas.nombres,personas.edad,personas.curp,personas.ine,domicilio.calle,domicilio.num_exterior,domicilio.num_int,domicilio.calle1,domicilio.calle2,domicilio.barrio,programa.programa,personas.telefono,personas.fecha_ingreso from personas,programa,domicilio where personas.id_domicilio=domicilio.id_domicilio and personas.id_programa= programa.id_programa order by personas.id_persona DESC");
 $stm->execute();
 $r = $stm->fetchAll(PDO::FETCH_ASSOC); 

	

    $fila=3;

	$objPHPExcel = new PHPExcel();

	$objPHPExcel->getProperties()
	->setCreator('Instituto de la Mujer')
	->setDescription('Reporte de personas');

	$objPHPExcel->setActiveSheetIndex(0);

	$objPHPExcel->getActiveSheet()->setTitle('Listado de cursos');

	$estiloTituloReporte = array(
    'font' => array(
	'name'      => 'Arial',
	'size' =>12
    ),
	);
	

	$estiloTituloColumnas = array(
    'font' => array(
	'name'  => 'Arial',
	'bold'  => true,
	'size' =>12,
	'color' => array(
	'rgb' => '000000'
	)
    ),
    'fill' => array(
	'type' => PHPExcel_Style_Fill::FILL_SOLID,
	'color' => array('rgb' => 'FF8800')
    ),
    'borders' => array(
	'allborders' => array(
	'style' => PHPExcel_Style_Border::BORDER_THIN
	)
    ),
    'alignment' =>  array(
	'horizontal'=> PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
	'vertical'  => PHPExcel_Style_Alignment::VERTICAL_CENTER
    )
	);
	
	$estiloInformacion = new PHPExcel_Style();
	$estiloInformacion->applyFromArray( array(
    'font' => array(
	'name'  => 'Arial',
	'size' =>12,
	'color' => array(
	'rgb' => '000000'
	)
    ),
    'fill' => array(
	'type'  => PHPExcel_Style_Fill::FILL_SOLID
	),
    'borders' => array(
	'allborders' => array(
	'style' => PHPExcel_Style_Border::BORDER_THIN
	)
    ),
	'alignment' =>  array(
	'horizontal'=> PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
	'vertical'  => PHPExcel_Style_Alignment::VERTICAL_CENTER
    )
	));

	//$objPHPExcel->getActiveSheet()->getStyle('A2:M6')->applyFromArray($estiloTituloReporte);
	$objPHPExcel->getActiveSheet()->getStyle('A2:H2')->applyFromArray($estiloTituloColumnas);
		$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(7);
	$objPHPExcel->getActiveSheet()->setCellValue('A2','N');
		$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(50);
	$objPHPExcel->getActiveSheet()->setCellValue('B2','NOMBRE COMPLETO');
	$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(10);
	$objPHPExcel->getActiveSheet()->setCellValue('C2','EDAD');
	$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(30);
	$objPHPExcel->getActiveSheet()->setCellValue('D2','CURP');
	$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(30);
	$objPHPExcel->getActiveSheet()->setCellValue('E2','CLAVE DE ELECTOR');
	$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(95);
	$objPHPExcel->getActiveSheet()->setCellValue('F2','DOMICILIO');
	$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(20);
	$objPHPExcel->getActiveSheet()->setCellValue('G2','TELEFONO');
	$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(33);
	$objPHPExcel->getActiveSheet()->setCellValue('H2','FECHA DE INSCRIPCION');
$cont=0;

foreach ($r as $row)
	{
++$cont;
		$objPHPExcel->getActiveSheet()->setCellValue('A'.$fila,$cont);
		$objPHPExcel->getActiveSheet()->setCellValue('B'.$fila,$row['paterno'].' '.$row['materno'].' '.$row['nombres']);
		$objPHPExcel->getActiveSheet()->setCellValue('C'.$fila,$row['edad']);
		$objPHPExcel->getActiveSheet()->setCellValue('D'.$fila,$row['curp']);
		$objPHPExcel->getActiveSheet()->setCellValue('E'.$fila,$row['ine']);
		$objPHPExcel->getActiveSheet()->setCellValue('F'.$fila,'Calle '.$row['calle'].', Num.'.$row['num_exterior'].' Ext. '.$row['num_int'].', entre calle '.$row['calle1'].' y calle '.$row['calle2'].', Col. '.$row['barrio']);
		$objPHPExcel->getActiveSheet()->setCellValue('G'.$fila,$row['telefono']);
		$objPHPExcel->getActiveSheet()->setCellValue('H'.$fila,$row['fecha_ingreso']);

		$fila++;
		
	}
	
	$fila = $fila-1;
	
	$objPHPExcel->getActiveSheet()->setSharedStyle($estiloInformacion, "A3:G".$fila);
	

	header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");

	header('Content-Disposition: attachment;filename="Listado de personas.xls"');

	header('Cache-Control: max-age=0');

	$objWriter= PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
	$objWriter->save('php://output');

 }
 


?>