<?php
	include('conexion.php');
	$cn= conectarse();

	$rsusuario = "SELECT usuario.user,usuario.pass,concat(empleado.nombres,empleado.apellidosPa + ' '+ empleado.apellidosMa) AS Apellidos,concat(empleado.email+email.dominio) as correo, empleado.puesto,empleado.telefono
		FROM `usuario` INNER JOIN empleado on usuario.idUsuario=empleado.idEmpleado INNER JOIN email on empleado.idEmail=email.idEmail";
    $usuario= mysqli_query($cn, $rsusuario); ///ejecuto la consulta 
?>