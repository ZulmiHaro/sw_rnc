<?php 
		include('conexion.php');
		$cn= conectarse();
		$id = $_REQUEST['id'];
		$usuario=$_POST['usuario'];
		$clave =$_POST['clave'];
		$empleado=$_POST['empleado'];

		$rscuenta = "DELETE from usuario where idUsuario='$id'";
		$cuenta = mysqli_query($cn,$rscuenta); 	
		header("Location: ../main.php#ajax/usuarios.php");
?>