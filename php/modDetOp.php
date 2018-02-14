<?php 
		include('conexion.php');
		$cn= conectarse();
		$id = $_REQUEST['id'];
		$periodo= $_POST['periodo'];
		$grado= $_POST['grado'];
		$seccion= $_POST['seccion'];
		$turno = $_POST['turno'];
		$horario= $_POST['horario'];

		$rscuenta = "UPDATE detalles_operativos SET idperiodo='$periodo',idgrado='$grado',idseccion='$seccion',idHorario='$horario',turno='$turno' where idDetalleOperativo='$id'";
		$cuenta = mysqli_query($cn,$rscuenta); 
	
		header("Location: ../main.php#ajax/agregarDetallesOp.php");
?>