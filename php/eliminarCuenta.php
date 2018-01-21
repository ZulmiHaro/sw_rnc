<?php 
		
		include('conexion.php');
		$cn= conectarse();
		$id = $_REQUEST['id'];
		$nivel= $_POST['nivel'];
		$cuenta= $_POST['cuenta'];
		$codigo= $_POST['codigo'];

		$rscuenta = "DELETE from cuenta where idCuenta='$id'";
		$cuenta = mysqli_query($cn,$rscuenta); 
	
		header("Location: ../main.php#ajax/cuentas.php");
?>