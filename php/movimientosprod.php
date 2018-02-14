<?php
	include('conexion.php');
	$cn= conectarse();
	$producto = $_POST['producto'];
	$cantidad = $_POST['cantidad'];
	$descripcion = $_POST['descripcion'];
	$fecha = date('Y-m-d H:i:s');

	$rsinsertar="INSERT INTO requerimiento_producto(fecha,cantidad,idProducto,descripcion) 
	VALUES ('$fecha','$cantidad','$producto','$descripcion')";
    $insertar = mysqli_query($cn,$rsinsertar);
    header("Location: ../main.php#ajax/requerimientos.php");
?>