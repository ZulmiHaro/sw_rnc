<?php 
	include('conexion.php');
	$cn= conectarse();
	$nombre= $_POST['nombre'];
	$apellidoPa= $_POST['apellidoPa'];
	$apellidoMa= $_POST['apellidoMa'];
	$dni=$_POST['dni'];
	$telefono=$_POST['telefono'];
	$telefono2= $_POST['telefono2'];
	$direccion= $_POST['direccion'];
	$email=$_POST['email'];
	$dominio=$_POST['dominio'];
	$sectorLaboral=$_POST['sectorLaboral'];
	$empleador=$_POST['empleador'];
	$facultadUNT=$_POST['facultadUNT'];
	$cargoUNT=$_POST['cargoUNT'];
	$condicionUNT=$_POST['condicionUNT'];

	$rs_registrar = "INSERT INTO apoderado (nombres, apellidoPa, apellidosMa, dni, telefono, direccion, dominioEmail, otroTelefono, email, sectorEmpleo, LugarEmpleo, facultadUnt, cargoUnt, condicionUnt) 
		VALUES('$nombre','$apellidoPa','$apellidoMa','$dni','$telefono','$telefono2','$direccion','$email','$dominio','$sectorLaboral','$empleador','$facultadUNT','$cargoUNT','$condicionUNT')";
	$registrar=mysqli_query($cn,$rs_registrar);
	header("Location: ../main.php#ajax/pagocaja.php");
?>