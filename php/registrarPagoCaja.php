<?php 
	include('conexion.php');
	$cn= conectarse();
	$servicio = $_POST['servicio'];
	$monto = $_POST['monto'];
	$fechaPago = $_POST['fechaPago'];
	$codPago = $_POST['codPago'];
	$nombreA = $_POST['nombreA'];
	$gradoA = $_POST['gradoA'];
	$seccionA = $_POST['seccionA'];
	$curso = $_POST['curso'];

	$rsinsertar = "INSERT INTO 
	pago_servicio(idServicio,montoPagado,fechaPago,idAlumno)
	VALUES('$servicio','$monto','$fechaPago','$codPago')";
	$insertar = mysqli_query($cn,$rsinsertar);
	header("Location: ../main.php#ajax/pagocaja.php");
?>