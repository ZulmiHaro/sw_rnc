<?php 
	include('plantilla.php');
	include("../php/conexion.php");
    $cn = conectarse();
    $rsservicios="SELECT concat(alumno.nombre,' ',alumno.apellidoPa,' ',alumno.apellidosMa) as Alumno, grado.descripcion as Grado,seccion.descripcion as Seccion,servicios.descripcion as Servicio,servicios.monto as Monto,pagobanco.mora as Mora,pagobanco.fechaPago as Fecha,`horaPago` as Hora,`nroOperacion` as Operacion,`codigoAgente` as Agente,`codigoTerminalista` as Terminal FROM `pagobanco` 
		INNER JOIN servicios on pagobanco.idServicio=servicios.idServicio
		INNER JOIN matricula on pagobanco.idMatricula=matricula.idMatricula
		INNER JOIN detalles_operativos on matricula.idDetallesOperativos=detalles_operativos.idDetalleOperativo
		INNER join alumno on detalles_operativos.idAlumno=alumno.idAlumno
		INNER join grado on detalles_operativos.idgrado=grado.idGrado
		INNER JOIN seccion on detalles_operativos.idseccion=seccion.idSeccion";
	$servicios = mysqli_query($cn,$rsservicios);

	$pdf = new PDF('L','mm','A4');
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->SetFont('Times','B',12);
	$pdf->SetFillColor(232,232,232);
	$pdf->Cell(45,6,'ALUMNO',1,0,'C',1);
	$pdf->Cell(20,6,'GRADO',1,0,'C',1);
	$pdf->Cell(20,6,'SECCION',1,0,'C',1);
	$pdf->Cell(30,6,'SERVICIO',1,0,'C',1);
	$pdf->Cell(20,6,'MONTO',1,0,'C',1);
	$pdf->Cell(20,6,'MORA',1,0,'C',1);
	$pdf->Cell(20,6,'FECHA',1,0,'C',1);
	//$pdf->Cell(20,6,'HORA',1,0,'C',1);
	$pdf->Cell(30,6,'OPERACION',1,0,'C',1);
	$pdf->Cell(20,6,'AGENTE',1,0,'C',1);
	$pdf->Cell(30,6,'TERMINAL',1,0,'C',1);
	$pdf->SetFont('Times','',10);
	while($row = $servicios->fetch_assoc())
	{
		$pdf->Ln();
		$pdf->Cell(45,6,utf8_decode($row['Alumno']),1,0,'C');	
		$pdf->Cell(20,6,utf8_decode($row['Grado']),1,0,'C');
		$pdf->Cell(20,6,$row['Seccion'],1,0,'C');
		$pdf->Cell(30,6,utf8_decode($row['Servicio']),1,0,'C');
		$pdf->Cell(20,6,$row['Monto'],1,0,'C');
		$pdf->Cell(20,6,$row['Mora'],1,0,'C');
		$pdf->Cell(20,6,$row['Fecha'],1,0,'C');
		$pdf->Cell(30,6,$row['Operacion'],1,0,'C');
		$pdf->Cell(20,6,$row['Agente'],1,0,'C');
		$pdf->Cell(30,6,$row['Terminal'],1,0,'C');
	}
	$pdf->Output('');
?>