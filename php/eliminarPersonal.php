<?php 	
		include('conexion.php');
		$cn= conectarse();
		$id = $_REQUEST['id'];
		$rspersonal = "DELETE from empleado where idempleado='$id'";
		$personal = mysqli_query($cn,$rspersonal); 
		header("Location: ../main.php#ajax/datosPersonal.php");
?>