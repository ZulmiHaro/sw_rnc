<?php
	include('conexion.php');
	$cn= conectarse();
	$nombre = $_POST['nombre'];
	$apellidoP = $_POST['apellidoP'];
	$apellidoM = $_POST['apellidoM'];
	$dni = $_POST['dni'];
	$telefono = $_POST['telefono'];
	$direccion = $_POST['direccion'];
	$email = $_POST['email'];
	$dominio = $_POST['dominio'];
	$estadocivil = $_POST['estadocivil'];
	$genero = $_POST['genero'];
	$fechaNacimiento = $_POST['fechaNacimiento'];
	$fechaRegistro = date('Y-m-d H:i:s');

	$rsinsertar="INSERT INTO empleado(nombres,apellidosPa,apellidosMa,direccion,telefono,dni,email,dominioEmail,estadoCivil,sexo,fechaNacimiento,fechaRegistro)
	VALUES ('$nombre','$apellidoP','$apellidoM','$direccion','$telefono','$dni','$email','$dominio','$estadocivil','$genero','$fechaNacimiento','$fechaRegistro')";
    $insertar = mysqli_query($cn,$rsinsertar);
    header("Location: ../main.php#ajax/datosPersonal.php");
?>