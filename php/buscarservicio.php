<?php 
		include('conexion.php');
		$cn= conectarse();
		$id= $_POST['id_servicio'];
		$rsmonto = "SELECT monto from servicios where idServicio='$id'";
		$monto = mysqli_query($cn,$rsmonto);
		$row=mysqli_fetch_array($monto);
		echo json_encode($row);
?>