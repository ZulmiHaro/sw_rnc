<?php 		
		include('conexion.php');
		$cn= conectarse();
		$id = $_REQUEST['id'];

		$rsProd = "DELETE from requerimiento_producto where idRequerimientoProd='$id'";
		$Prod = mysqli_query($cn,$rsProd); 
	
		header("Location: ../main.php#ajax/requerimientos.php");
?>