<?php 
	include('plantilla.php');
	include("../php/conexion.php");
    $cn = conectarse();
    $rsPersonal="SELECT concat(empleado.nombres,' ',empleado.apellidosPa,' ',empleado.apellidosMa) as Empleado,empleado.dni as DNI, concat(empleado.email,empleado.dominioEmail) as Email,concat(DAYOFMONTH(empleado.fechaNacimiento),' de ',MONTHNAME(empleado.fechaNacimiento)) as Cumpleaño, contrato_trabajador.fechaIngreso as Fecha,area.nombreArea as Area,contrato_trabajador.cargo as Cargo,contrato_trabajador.sueldo as Sueldo FROM contrato_trabajador
		INNER JOIN empleado on contrato_trabajador.idEmpleado = empleado.idEmpleado
		INNER JOIN tipo_trabajador on contrato_trabajador.idTipoEmpleado = tipo_trabajador.idTipoEmpleado
		INNER JOIN area on contrato_trabajador.idArea = area.idArea";
	$personal = mysqli_query($cn,$rsPersonal);

	$pdf = new PDF('L','mm','A4');
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->SetFont('Times','B',12);
	$pdf->SetFillColor(232,232,232);
	$pdf->Cell(65,6,'EMPLEADO',1,0,'C',1);
	$pdf->Cell(25,6,'DNI',1,0,'C',1);
	$pdf->Cell(50,6,'EMAIL',1,0,'C',1);
	$pdf->Cell(30,6,'F.INGRESO',1,0,'C',1);
	$pdf->Cell(30,6,'AREA',1,0,'C',1);
	$pdf->Cell(30,6,'CARGO',1,0,'C',1);
	$pdf->Cell(20,6,'SUELDO',1,0,'C',1);

	$pdf->SetFont('Times','',10);

	while($row = $personal->fetch_assoc())
	{
		$pdf->Ln();
		$pdf->Cell(65,6,utf8_decode($row['Empleado']),1,0,'C');
		$pdf->Cell(25,6,$row['DNI'],1,0,'C');
		$pdf->Cell(50,6,$row['Email'],1,0,'C');
		$pdf->Cell(30,6,$row['Fecha'],1,0,'C');
		$pdf->Cell(30,6,$row['Area'],1,0,'C');
		$pdf->Cell(30,6,$row['Cargo'],1,0,'C');
		$pdf->Cell(20,6,utf8_decode($row['Sueldo']),1,0,'C');
	}
	$pdf->Output('');
?>