<?php 
		include('conexion.php');
		$cn= conectarse();
		$id = $_REQUEST['id'];
		$nombre = $_POST['nombresP'];
		$codigo = $_POST['codigoP'];
		$cantidad = $_POST['cantidadP'];
		$medida = $_POST['medida'];
		$descripcion = $_POST['descripcionP'];
		$costo = $_POST['costoP'];

		$rscuenta = "UPDATE producto SET nombreProd='$nombre',codigo='$codigo',cantidad='$cantidad'
		,descripcion='$descripcion',medida='$medida',costo ='$costo' where idProducto='$id'";
		$cuenta = mysqli_query($cn,$rscuenta); 
	
		header("Location: ../main.php#ajax/datosProducto.php");
?>