<?php
	include('php/conexion.php');
	$cn= conectarse();
	session_start();
	$id = $_REQUEST['id'];
    $rsperiodo="SELECT * FROM `periodo` ORDER BY `descripcion`";
    $periodo= mysqli_query($cn,$rsperiodo);
    $rsgrado="SELECT `idGrado`,concat(grado.descripcion,'-',nivel.descripcion) as Grado FROM `grado` 
	INNER JOIN nivel on grado.idNivel=nivel.idNivel ORDER by `idGrado`";
    $grado= mysqli_query($cn,$rsgrado);
    $rsseccion="SELECT `idSeccion`,concat(seccion.descripcion,'-',grado.descripcion,' DE ',nivel.descripcion) as Seccion FROM `seccion` 
	INNER JOIN grado on seccion.idGrado=grado.idGrado
	INNER JOIN nivel on grado.idNivel=nivel.idNivel  ORDER BY `idSeccion`";
    $seccion= mysqli_query($cn,$rsseccion);
    $rshorario="SELECT `idHorario`,concat(horario.horaEntrada,'-',horario.horaSalida) as Horario,`tipo` FROM `horario` ORDER BY `idHorario`";
    $horario= mysqli_query($cn,$rshorario);

    $rsdetop = "SELECT idDetalleOperativo,concat(alumno.nombre,' ',alumno.apellidoPa,' ',alumno.apellidosMa) as Alumno,periodo.descripcion as Periodo,concat(grado.descripcion,'-',nivel.descripcion) as Grado,concat(seccion.descripcion,'-',grado.descripcion,' DE ',nivel.descripcion) as Seccion,concat(horario.horaEntrada,'-',horario.horaSalida) as Horario,`turno` FROM `detalles_operativos` 
		INNER JOIN alumno on detalles_operativos.idAlumno = alumno.idAlumno
		INNER JOIN periodo on detalles_operativos.idperiodo = periodo.idPeriodo
		INNER JOIN grado on detalles_operativos.idgrado = grado.idGrado
		INNER JOIN nivel on grado.idNivel=nivel.idNivel
		INNER JOIN seccion on detalles_operativos.idseccion = seccion.idSeccion
		INNER JOIN horario on detalles_operativos.idHorario = horario.idHorario where idDetalleOperativo = '$id'";
    $detop = mysqli_query($cn,$rsdetop);
    $row = mysqli_fetch_array($detop);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php
       	include('php/head.php');
    ?>
    <link rel="icon" href="img/icon.ico">
</head>
<body>
<!--Start Header-->
<header class="navbar">
	<?php
		include('php/header.php');
	?>
</header>
<!--End Header-->
<!--Start Container-->
<div id="main" class="container-fluid">
	<div class="row">
		<div id="sidebar-left" class="col-xs-2 col-sm-2">
			<?php
				include('php/sidebar.php');
			?>
		</div>
		<!--Start Content-->
		<div id="content" class="col-xs-12 col-sm-10">
			<div class="row">
				<?php
					include('php/breadcrumb.php');
				?>
			</div>
			
			<div class="col-xs-12 col-sm-12">
		    	<div class="box">
		<div class="box-header">
			<div class="box-name">
					<i class="fa fa-usd"></i>
					<span>Nuevo Alumno</span>
			</div>
			<div class="box-icons">
					<a class="collapse-link">
						<i class="fa fa-chevron-up"></i>
					</a>
					<a class="expand-link">
						<i class="fa fa-expand"></i>
					</a>
			</div>
			<div class="no-move"></div>
		</div>
		<div class="box-content">
				<form id="nuevoAlumno" method="post" action="php/modDetOp.php?id= <?php echo $row['idDetalleOperativo']; ?>" class="form-horizontal">
					<fieldset>
					<legend>Detalles de Matricula</legend> 
					<div class="form-group">
						<label class="col-sm-3 control-label">Alumno</label>
						<div class="col-sm-5">
								<input type="text" class="form-control" name="nombre" id="nombre" onKeyUp="this.value= this.value.toUpperCase();" value="<?php echo $row['Alumno']?>" disabled />
							</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Periodo</label>
						<div class="col-sm-5">
							<select class="populate placeholder" name="periodo" id="periodo">
							<?php while ($rsperiodo=mysqli_fetch_array($periodo)) {?>
                               <option value="<?php echo $rsperiodo['idPeriodo'] ?>" ><?php 
                               echo $rsperiodo['descripcion'] ?></option>
                           	<?php } ?> 
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Grado</label>
						<div class="col-sm-5">
							<select class="populate placeholder" name="grado" id="grado">
							<?php while ($rsgrado=mysqli_fetch_array($grado)) {?>
                               <option value="<?php echo $rsgrado['idGrado'] ?>" ><?php 
                               echo $rsgrado['Grado'] ?></option>
                           	<?php } ?> 
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Sección</label>
						<div class="col-sm-5">
							<select class="populate placeholder" name="seccion" id="seccion">
							<?php while ($rsseccion=mysqli_fetch_array($seccion)) {?>
                               <option value="<?php echo $rsseccion['idSeccion'] ?>" ><?php 
                               echo $rsseccion['Seccion'] ?></option>
                           	<?php } ?> 
							</select>
						</div>
					</div>
					<div class="form-group">
							<label class="col-sm-3 control-label">Turno</label>
							<div class="col-sm-5">
								<select class="populate placeholder" name="turno" id="turno">						
                                <option value="MAÑANA">MAÑANA</option>
                                <option value="TARDE">TARDE</option>
								</select>
							</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Horario</label>
						<div class="col-sm-5">
							<select class="populate placeholder" name="horario" id="horario">
							<?php while ($rshorario=mysqli_fetch_array($horario)) {?>
                               <option value="<?php echo $rshorario['idHorario'] ?>" ><?php 
                               echo $rshorario['Horario'] ?></option>
                           	<?php } ?> 
							</select>
						</div>
					</div>
				</fieldset>
					<div class="form-group">
						<div class="col-sm-9 col-sm-offset-3">
							<button type="submit" class="btn btn-primary">Confirmar</button>
                            <a href="main.php" type="button" class="btn btn-danger">Cancelar</a>
						</div>                     
					</div>
				</form>
		</div>
	</div>
</div>
			
		</div>
		<!--End Content-->
	</div>
	<?php 
	include('php/footer.php');
 ?>
</div>
</body>
</html>
