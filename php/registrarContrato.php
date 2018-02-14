<?php 
	include('conexion.php');
	$cn= conectarse();
	$empleado = $_POST['empleado'];
	$fecha = date('Y-m-d H:i:s');
	$tipo = $_POST['tipo'];
	$area = $_POST['area'];
	$horario = $_POST['horario'];
	$sueldo = $_POST['sueldo'];
	$cargo = $_POST['cargo'];
	$procedencia = $_POST['procedencia'];
	$modoContrato = $_POST['modoContrato'];

	$rsdetOp = "INSERT INTO 
	contrato_trabajador(idArea,idEmpleado,fechaIngreso,sueldo,idHorario,modo,cargo,entidadProcedencia,idTipoEmpleado) 
				VALUES('$area','$empleado','$fecha','$sueldo','$horario','$modoContrato','$cargo','$procedencia','$tipo')";
	$detOp = mysqli_query($cn,$rsdetOp); 
	
	header("Location: ../main.php#ajax/agregarContrato.php");
?>