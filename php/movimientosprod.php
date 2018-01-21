<?php
	include('conexion.php');
	$cn= conectarse();
	$idProducto = $_POST['idProducto'];
	$cantidad = $_POST['cantidadP'];
	$descripcion = $_POST['descripcionP'];
	$fecha = $_POST['fechaIP'];

	$rsinsertar="INSERT INTO requerimiento_producto(idProducto,cantidad,descripcion, fecha) VALUES ('$idProducto','$cantidad','$descripcion','$fecha')";
    $insertar = mysqli_query($cn,$rsinsertar);
    header("Location: ../main.php#ajax/requerimientos.php");
?>