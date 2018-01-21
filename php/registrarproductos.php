<?php
	include('conexion.php');
	$cn= conectarse();
	$nombre = $_POST['nombresP'];
	$codigo = $_POST['codigoP'];
	$cantidad = $_POST['cantidadP'];
	$medida = $_POST['medida'];
	$descripcion = $_POST['descripcionP'];
	$costo = $_POST['costoP'];
	$rsinsertar="INSERT INTO producto(nombreProd,codigo,cantidad,descripcion, fecha,medida,costo) 
	VALUES('$nombre','$codigo','$cantidad','$descripcion','getdate();','$medida','$costo')";
    $insertar = mysqli_query($cn,$rsinsertar);
    header("Location: ../main.php#ajax/datosProducto.php");
?>