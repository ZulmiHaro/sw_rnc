<?php
	include('conexion.php');
	$cn= conectarse();
	$id = $_REQUEST['id'];
	$nombre = $_POST['nombre'];
	$apellidoP = $_POST['apellidoP'];
	$apellidoM = $_POST['apellidoM'];
	$dni = $_POST['dniPs'];
	$telefono = $_POST['telefonoPs'];
	$direccion = $_POST['direccionPs'];
	$tipo= $_POST['tipo'];
	$email = $_POST['emailPs'];
	$dominioEmail = $_POST['dominioEmail'];
	$area = $_POST['area'];
	$puesto = $_POST['puestoPs'];

	$rsactualizar="UPDATE empleado SET nombres='$nombre',apellidosPa='$apellidoP',apellidosMa='$apellidoM',dni='$dni',telefono='$telefono',direccion='$direccion',email='$email',puesto='$puesto' 
	where idEmpleado = '$id'";
    $actualizar = mysqli_query($cn,$rsactualizar);
    header("Location: ../main.php#ajax/datosPersonal.php");
?>