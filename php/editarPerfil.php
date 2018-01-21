<?php 
	include('../php/conexion.php');
	$cn= conectarse();

	$nombre = $_POST['nombremodal'];
	$apellidoP = $_POST['apellidoPmodal'];
	$apellidoM = $_POST['apellidosMmodal'];
	$correo = $_POST['correomodal'];
	$direccion = $_POST['direccionmodal'];
	$dni = $_POST['dnimodal'];

	$rsEditarPerfil = "UPDATE empleado set nombres='".$nombre."',apellidosPa='".$apellidoP."',
	apellidosMa='".$apellidoM."',email='".$correo."',direccion='".$direccion."',dni='".$dni."' 
	where idEmpleado=1";
	$editarPerfil = mysql_query($cn,$rsEditarPerfil);
	if ($editarPerfil){
				echo '1';
				header("Location: ../ajax/perfil.php");
	} else{
				echo "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($cn);
	}
?>