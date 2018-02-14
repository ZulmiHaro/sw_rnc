<?php
	include('conexion.php');
	$cn= conectarse();
	$nombre = $_POST['nombresP'];
	$codigo = $_POST['codigoP'];
	$cantidad = $_POST['cantidadP'];
	$medida = $_POST['medida'];
	$stock = $_POST['stock'];
	$descripcion = $_POST['descripcionP'];
	$costo = $_POST['costoP'];
	$fecha = date('Y-m-d H:i:s');

	$rsinsertar="INSERT INTO producto(nombreProd,descripcion,cantidad,codigo,fecha,medida,costo,stock) 
	VALUES('$nombre','$descripcion','$cantidad','$codigo','$fecha','$medida','$costo','$stock')";
    $insertar = mysqli_query($cn,$rsinsertar);
    header("Location: ../main.php#ajax/datosProducto.php");
?>
