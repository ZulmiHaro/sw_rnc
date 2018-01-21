<?php 
		include('conexion.php');
		$cn= conectarse();
		$id= $_POST['id_alumno'];
		$rsalumno = "select concat(a.nombre,' ',a.apellidoPa,' ',a.apellidosMa) as Nombre, g.descripcion as Grado, s.descripcion as Seccion from alumno a inner join matricula m on a.idAlumno=m.idAlumno inner join detalles_operativos dop on m.idDetallesOperativos=dop.idDetalleOperativo inner JOIN grado g on dop.idgrado=g.idGrado inner join seccion s on dop.idseccion=s.idSeccion
where m.idAlumno='$id' and YEAR(m.fecha)=YEAR(CURRENT_DATE)";
		$alumno = mysqli_query($cn,$rsalumno);
		if ($alumno->num_rows>0){
		$rows=mysqli_fetch_array($alumno);
	}
		echo json_encode($rows);

?>