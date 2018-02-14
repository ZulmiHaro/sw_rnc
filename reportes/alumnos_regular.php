<?php 
	include('plantilla.php');
	include("../php/conexion.php");
    $cn = conectarse();
    $rsAlumnos="SELECT concat(alumno.nombre,' ',alumno.apellidoPa,' ',alumno.apellidosMa) as Alumno,alumno.tipoAlumno as Tipo,periodo.descripcion as Periodo,nivel.descripcion as Nivel,seccion.descripcion as Seccion,grado.descripcion as Grado,matricula.fechaPago as Matricula,matricula.condicionAlumno as Condicion FROM `matricula`
		INNER JOIN  detalles_operativos on matricula.idDetallesOperativos=detalles_operativos.idDetalleOperativo
		INNER JOIN alumno on detalles_operativos.idAlumno = alumno.idAlumno
		INNER JOIN periodo on detalles_operativos.idperiodo = periodo.idPeriodo
		INNER JOIN grado on detalles_operativos.idgrado = grado.idGrado
		INNER JOIN nivel on grado.idNivel = nivel.idNivel
		INNER JOIN seccion on detalles_operativos.idseccion = seccion.idSeccion
		INNER JOIN horario on detalles_operativos.idHorario = horario.idHorario where alumno.tipoAlumno='INTERNO'";
	$alumnos = mysqli_query($cn,$rsAlumnos);

	$pdf = new PDF('L','mm','A4');
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->SetFont('Times','B',12);
	$pdf->SetFillColor(232,232,232);
	$pdf->Cell(65,6,'ALUMNO',1,0,'C',1);
	$pdf->Cell(25,6,'TIPO',1,0,'C',1);
	$pdf->Cell(30,6,'PERIODO',1,0,'C',1);
	$pdf->Cell(30,6,'NIVEL',1,0,'C',1);
	$pdf->Cell(22,6,'SECCION',1,0,'C',1);
	$pdf->Cell(20,6,'GRADO',1,0,'C',1);
	$pdf->Cell(20,6,'F.MATR.',1,0,'C',1);
	$pdf->Cell(30,6,'CONDICION',1,0,'C',1);

	$pdf->SetFont('Times','',10);

	while($row = $alumnos->fetch_assoc())
	{
		$pdf->Ln();
		$pdf->Cell(65,6,utf8_decode($row['Alumno']),1,0,'C');
		$pdf->Cell(25,6,$row['Tipo'],1,0,'C');
		$pdf->Cell(30,6,$row['Periodo'],1,0,'C');
		$pdf->Cell(30,6,$row['Nivel'],1,0,'C');
		$pdf->Cell(22,6,$row['Seccion'],1,0,'C');
		$pdf->Cell(20,6,utf8_decode($row['Grado']),1,0,'C');
		$pdf->Cell(20,6,$row['Matricula'],1,0,'C');
		$pdf->Cell(30,6,$row['Condición'],1,0,'C');
	}
	$pdf->Output('');
?>