<?php 
	include('conexion.php');
	$cn= conectarse();
	$codPagoAlumno = $_POST['codPagoAlumno'];
	$montoServicio = $_POST['montoServicio'];
	$mora = $_POST['mora'];
	$fechaPago = $_POST['fechaPago'];
	$horaPago = $_POST['horaPago'];
	$nroOperacion = $_POST['nroOperacion'];
	$codAgente = $_POST['codAgente'];
	$codTerminalista = $_POST['codTerminalista'];

	$rsinsertar = "INSERT INTO 
	pagoBanco(idServicio,mora,fechaPago,horaPago,nroOperacion,codigoAgente,codigoTerminalista,idMatricula)
	VALUES('$montoServicio','$mora','$fechaPago','$horaPago','$nroOperacion','$codAgente','$codTerminalista','$codPagoAlumno')";
	$insertar = mysqli_query($cn,$rsinsertar);
	header("Location: ../main.php#ajax/pagoBanco.php");
?>