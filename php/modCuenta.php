<?php 
		include('conexion.php');
		$cn= conectarse();
		$id = $_REQUEST['id'];
		$nivel= $_POST['nivel'];
		$cuenta= $_POST['cuenta'];
		$codigo= $_POST['codigo'];

		$rscuenta = "UPDATE cuenta SET nivel='$nivel', cuenta='$cuenta', codigo='$codigo' 
		where idCuenta='$id'";
		$cuenta = mysqli_query($cn,$rscuenta); 
	
		header("Location: ../main.php#ajax/cuentas.php");
?>