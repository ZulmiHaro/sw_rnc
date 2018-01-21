<?php 
		include('conexion.php');
		$cn= conectarse();
		$nivel= $_POST['nivel'];
		$cuenta= $_POST['cuenta'];
		$codigo= $_POST['codigo'];

		$rscuenta = "INSERT INTO cuenta(nivel,cuenta,codigo) values('$nivel','$cuenta','$codigo')";
		$cuenta = mysqli_query($cn,$rscuenta); 
	
		header("Location: ../main.php#ajax/cuentas.php");
?>