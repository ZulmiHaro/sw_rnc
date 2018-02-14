<?php 
		include('conexion.php');
		$cn= conectarse();
		$id= $_POST['id_alumno'];
		$rsalumno = "SELECT * FROM `alumno` 
			WHERE idAlumno = '$id'";
		$alumno = mysqli_query($cn,$rsalumno);
		if ($alumno->num_rows>0){
			$row=mysqli_fetch_array($alumno);
		}
		echo json_encode($row);
?>