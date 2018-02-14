<?php 
		include('conexion.php');
		$cn= conectarse();
		$id = $_REQUEST['id'];

		$rsalumno = "DELETE FROM alumno WHERE idAlumno='$id'";
		$alumno = mysqli_query($cn,$rsalumno); 
	
		header("Location: ../main.php#ajax/agregarAlumno.php");
?>