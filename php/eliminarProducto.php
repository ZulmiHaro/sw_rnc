<?php 		
		include('conexion.php');
		$cn= conectarse();
		$id = $_REQUEST['id'];

		$rscuenta = "DELETE from producto where idProducto='$id'";
		$cuenta = mysqli_query($cn,$rscuenta); 
	
		header("Location: ../main.php#ajax/datosProducto.php");
?>