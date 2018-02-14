<?php 
	include('plantilla.php');
	include("../php/conexion.php");
    $cn = conectarse();
    $rsservicios="SELECT concat(alumno.nombre,' ',alumno.apellidoPa,' ',alumno.apellidosMa) as Alumno, detalles_operativos.turno as Turno,grado.descripcion as Grado,seccion.descripcion as Seccion,servicios.descripcion as Servicio,servicios.monto as Monto,pago_servicio.fechaPago as Fecha,curso.curso as Curso FROM `pago_servicio` 
		INNER JOIN detalles_operativos on pago_servicio.idDetOp=detalles_operativos.idDetalleOperativo
		INNER JOIN curso on pago_servicio.idCurso=curso.idCurso
		INNER JOIN servicios on pago_servicio.idServicio=servicios.idServicio
		INNER JOIN alumno on detalles_operativos.idAlumno=alumno.idAlumno
		INNER join grado on detalles_operativos.idgrado=grado.idGrado
		INNER JOIN seccion on detalles_operativos.idseccion=seccion.idSeccion";
	$servicios = mysqli_query($cn,$rsservicios);

	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->SetFont('Times','B',12);
	$pdf->SetFillColor(232,232,232);
	$pdf->Cell(45,6,'ALUMNO',1,0,'C',1);
	$pdf->Cell(20,6,'TURNO',1,0,'C',1);
	$pdf->Cell(20,6,'GRADO',1,0,'C',1);
	$pdf->Cell(20,6,'SECCION',1,0,'C',1);
	$pdf->Cell(30,6,'SERVICIO',1,0,'C',1);
	$pdf->Cell(20,6,'MONTO',1,0,'C',1);
	$pdf->Cell(20,6,'FECHA',1,0,'C',1);
	$pdf->Cell(20,6,'CURSO',1,0,'C',1);
	$pdf->SetFont('Times','',10);
	while($row = $servicios->fetch_assoc())
	{
		$pdf->Ln();
		$pdf->Cell(45,6,utf8_decode($row['Alumno']),1,0,'C');
		$pdf->Cell(20,6,$row['Turno'],1,0,'C');
		$pdf->Cell(20,6,utf8_decode($row['Grado']),1,0,'C');
		$pdf->Cell(20,6,$row['Seccion'],1,0,'C');
		$pdf->Cell(30,6,utf8_decode($row['Servicio']),1,0,'C');
		$pdf->Cell(20,6,$row['Monto'],1,0,'C');
		$pdf->Cell(20,6,$row['Fecha'],1,0,'C');
		$pdf->Cell(20,6,$row['Curso'],1,0,'C');
	}
	$pdf->Output('');
?>