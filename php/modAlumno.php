<?php 
		include('conexion.php');
		$cn= conectarse();
		$id = $_REQUEST['id'];
		$nombre= $_POST['nombre'];
		$apellidoPa= $_POST['apellidoPa'];
		$apellidoMa= $_POST['apellidoMa'];
		$tipo= $_POST['tipo'];
		$estado= $_POST['estado'];
		$codigoPago=$_POST['codigoPago'];
		$apoderado=$_POST['apoderado'];

		$rscuenta = "UPDATE alumno SET nombre='$nombre',apellidoPa='$apellidoPa',apellidosMa='$apellidoMa'
		,codPago='$codigoPago',tipoAlumno='$tipo',estadoAlumno ='$estado',idApoderado = '$apoderado' where idAlumno='$id'";
		$cuenta = mysqli_query($cn,$rscuenta); 
	
		header("Location: ../main.php#ajax/agregarAlumno.php");
?>