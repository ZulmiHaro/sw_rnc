<?php 
	include('conexion.php');
	$cn= conectarse();
	$detOp= $_POST['detOp'];
	$fechaMatricula= date('Y-m-d H:i:s');
	$codigo= $_POST['codigo'];
	$fechaPago= $_POST['fechaPago'];
	$condicion = $_POST['condicion'];

	$rsdetOp = "INSERT INTO matricula(idDetallesOperativos,fechaMatricula,codMatricula,fechaPago,condicionAlumno) 
				VALUES('$detOp','$fechaMatricula','$codigo','$fechaPago','$condicion')";
	$detOp = mysqli_query($cn,$rsdetOp); 
	
	header("Location: ../main.php#ajax/agregarMatricula.php");
?>