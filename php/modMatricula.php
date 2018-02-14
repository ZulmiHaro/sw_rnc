<?php 
		include('conexion.php');
		$cn= conectarse();
		$id = $_REQUEST['id'];
		$detOp= $_POST['detOp'];
		$fechaMatricula= date('Y-m-d H:i:s');
		$codigo= $_POST['codigo'];
		$fechaPago= $_POST['fechaPago'];
		$condicion = $_POST['condicion'];

		$rscuenta = "UPDATE matricula SET codMatricula='$codigo',fechaPago='$fechaPago',condicionAlumno='$condicion' where idMatricula='$id'";
		$cuenta = mysqli_query($cn,$rscuenta); 
	
		header("Location: ../main.php#ajax/agregarMatricula.php");
?>