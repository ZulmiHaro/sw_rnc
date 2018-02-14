<?php 
	include('conexion.php');
	$cn= conectarse();
	$servicio = $_POST['servicio'];
	$monto = $_POST['monto'];
	$codPago = $_POST['cboPago'];
	$curso = $_POST['curso'];
	$fecha = date('Y-m-d H:i:s');

	$rsinsertar= "INSERT INTO pago_servicio(idServicio,fechaPago,idCurso,idDetOp)
	VALUES('$servicio','$fecha','$curso','$codPago')";
	$insertar= mysqli_query($cn,$rsinsertar);
	header("Location: ../main.php#ajax/pagocaja.php");
?>