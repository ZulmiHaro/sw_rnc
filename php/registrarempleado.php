<?php
	include('conexion.php');
	$cn= conectarse();
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

	$rsinsertar="INSERT INTO empleado(nombres,apellidosPa,apellidosMa,dni,telefono,direccion,idTipoEmpleado,email,idArea,puesto,dominioEmail)
	VALUES ('$nombre','$apellidoP','$apellidoM','$dni','$telefono','$direccion','$tipo','$email','$area','$puesto','$dominioEmail')";
    $insertar = mysqli_query($cn,$rsinsertar);
    header("Location: ../main.php#ajax/datosPersonal.php");
?>