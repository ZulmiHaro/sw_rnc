<?php 
	include('conexion.php');
	$cn= conectarse();
	$usuario=$_POST['usuario'];
	$clave =$_POST['clave'];
	$empleado=$_POST['empleado'];

	$rsinsertar = "INSERT INTO usuario(pass,user,idEmpleado)
	VALUES('$clave','$usuario','$empleado')";
	$insertar = mysqli_query($cn,$rsinsertar);
	header("Location: ../main.php#ajax/usuarios.php");
?>