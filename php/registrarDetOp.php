<?php 
	include('conexion.php');
	$cn= conectarse();
	$alumno= $_POST['alumno'];
	$periodo= $_POST['periodo'];
	$grado= $_POST['grado'];
	$seccion= $_POST['seccion'];
	$turno = $_POST['turno'];
	$horario= $_POST['horario'];

	$rsdetOp = "INSERT INTO detalles_operativos(idperiodo,idgrado,idseccion,idHorario,idAlumno,turno) 
				VALUES('$periodo','$grado','$seccion','$horario','$alumno','$turno')";
	$detOp = mysqli_query($cn,$rsdetOp); 
	
	header("Location: ../main.php#ajax/agregarDetallesOp.php");
?>