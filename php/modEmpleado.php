<?php
	include('conexion.php');
	$cn= conectarse();
	$id = $_REQUEST['id'];
	$nombre = $_POST['nombre'];
	$apellidoP = $_POST['apellidoP'];
	$apellidoM = $_POST['apellidoM'];
	$dni = $_POST['dni'];
	$telefono = $_POST['telefono'];
	$direccion = $_POST['direccion'];
	$email = $_POST['email'];
	$dominio = $_POST['dominio'];
	$estado = $_POST['estadocivil'];

	$rsactualizar="UPDATE empleado SET nombres='$nombre',apellidosPa='$apellidoP',apellidosMa='$apellidoM',
	direccion='$direccion',telefono='$telefono',dni='$dni',email='$email',dominioEmail='$dominio',
	estadoCivil='$estado' WHERE idempleado='$id'";

    $actualizar = mysqli_query($cn,$rsactualizar);
    header("Location: ../main.php#ajax/datosPersonal.php");
?>