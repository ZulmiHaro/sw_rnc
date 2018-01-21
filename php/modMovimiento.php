<?php
	include('conexion.php');
	$cn= conectarse();
	$id = $_REQUEST['id'];
	$idProducto = $_POST['idProducto'];
	$cantidad = $_POST['cantidadP'];
	$descripcion = $_POST['descripcionP'];
	$fecha = $_POST['fechaIP'];

	$rsinsertar="UPDATE requerimiento_producto SET cantidad='$cantidad',descripcion='$descripcion',fecha ='$fecha' WHERE idRequerimientoProd = '$id'";
    $insertar = mysqli_query($cn,$rsinsertar);
    header("Location: ../main.php#ajax/requerimientos.php");
?>