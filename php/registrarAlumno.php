<?php 
	include('conexion.php');
	$cn= conectarse();
	$nombre= $_POST['nombre'];
	$apellidoPa= $_POST['apellidoPa'];
	$apellidoMa= $_POST['apellidoMa'];
	$tipo= $_POST['tipo'];
	$estado= $_POST['estado'];
	$codigoPago=$_POST['codigoPago'];
	$apoderado=$_POST['apoderado'];

	$rs_registrar = "INSERT INTO alumno(nombre,apellidoPa,apellidosMa,codPago,tipoAlumno,estadoAlumno,idApoderado) 
	VALUES('$nombre','$apellidoPa','$apellidoMa','$codigoPago','$tipo','$estado','$apoderado')";
	$registrar=mysqli_query($cn,$rs_registrar);
	header("Location: ../main.php#ajax/pagocaja.php");
?>