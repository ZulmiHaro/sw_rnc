<?php
	include('conexion.php');
	$cn= conectarse();
	$id = $_REQUEST['id'];
	$usuario=$_POST['usuario'];
	$clave =$_POST['clave'];

	$rsactualizar="UPDATE usuario SET pass='$clave',user='$usuario' where idUsuario = '$id'";
    $actualizar = mysqli_query($cn,$rsactualizar);
    header("Location: ../main.php#ajax/usuarios.php");
?>