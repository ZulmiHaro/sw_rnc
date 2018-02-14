<?php
include('php/conexion.php');
$cn= conectarse();
session_start();
$id = $_REQUEST['id'];
$rsalumno="SELECT * from alumno where idAlumno = '$id'";
$alumno = mysqli_query($cn,$rsalumno);
$row = mysqli_fetch_array($alumno);
$rsapoderado ="SELECT `idApoderado`,concat(`nombres`,' ',`apellidoPa`,' ',`apellidosMa`) as Apoderado FROM `apoderado`";
$apoderado= mysqli_query($cn,$rsapoderado);
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
				<form id="nuevoAlumno" method="post" action="php/modAlumno.php?id= <?php echo $row['idAlumno']; ?>" class="form-horizontal">
					<fieldset>
						<legend>Datos Alumno</legend>                  
						<div class="form-group">
							<label class="col-sm-3 control-label">Tipo de Alumno</label>
							<div class="col-sm-5">
								<select class="populate placeholder" name="tipo" id="tipo">						
                                <option value="INTERNO">INTERNO</option>
                                <option value="EXTERNO">EXTERNO</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Nombres</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="nombre" id="nombre" onKeyUp="this.value= this.value.toUpperCase();" value="<?php echo $row['nombre']?>" required />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Apellido Paterno</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="apellidoPa" id="apellidoPa" onKeyUp="this.value = this.value.toUpperCase();" value="<?php echo $row['apellidoPa']?>" required />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Apellido Materno</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="apellidoMa" id="apellidoMa" onKeyUp="this.value = this.value.toUpperCase();" value="<?php echo $row['apellidosMa']?>" required />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Código de Pago</label>
							<div class="col-sm-3">
								<input type="text" class="form-control" name="codigoPago" id="codigoPago" value="<?php echo $row['codPago']?>" required />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Estado de Alumno</label>
							<div class="col-sm-5">
								<select class="populate placeholder" name="estado" id="estado">
                                <option value="ACTIVO">ACTIVO</option>
                                <option value="RETIRADO">RETIRADO</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Apoderado</label>
							<div class="col-sm-6">
								<select class="populate placeholder" name="apoderado" id="apoderado">
								<?php while ($rsapoderado=mysqli_fetch_array($apoderado)) {?>
                                <option value="<?php echo $rsapoderado['idApoderado'] ?>" ><?php 
                                echo $rsapoderado['Apoderado'] ?></option>
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
