<?php
include('php/conexion.php');
$cn= conectarse();
session_start();
$id = $_REQUEST['id'];
$rslistar = "SELECT * from empleado WHERE idEmpleado='$id'";
$listar = mysqli_query($cn,$rslistar);
$row = mysqli_fetch_array($listar);
$rstrabajador = "select * from tipo_trabajador order by idTipoEmpleado";
$trabajador= mysqli_query($cn, $rstrabajador); 
$rsarea = "select * from area order by idArea";
$area= mysqli_query($cn, $rsarea); ///ejecuto la consulta
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
					<i class="fa fa-pencil-square-o"></i>
					<span>Datos del Personal</span>
				</div>
				<div class="box-icons">
					<a class="collapse-link">
						<i class="fa fa-chevron-up"></i>
					</a>
					<a class="expand-link">
						<i class="fa fa-expand"></i>
					</a>
					<a class="close-link">
						<i class="fa fa-times"></i>
					</a>
				</div>
				<div class="no-move"></div>
			</div>
			<div class="box-content">
				<form id="defaultForm" method="post" action="php/modempleado.php?id = <?php echo $row['idEmpleado']?>" class="form-horizontal">
					<fieldset>
						<legend>Datos Personales</legend>
						<div class="form-group">
							<label class="col-sm-3 control-label">Nombres</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="nombre" 
								value="<?php echo $row['nombres']?>" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Apellido Paterno</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="apellidoP" 
								value="<?php echo $row['apellidosPa']?>" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Apellido Materno</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="apellidoM"
								 value="<?php echo $row['apellidosMa']?>"  />
							</div>
						</div>
                        <div class="form-group">
							<label class="col-sm-3 control-label">DNI</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="dniPs"
								value="<?php echo $row['dni']?>" />
							</div>
						</div>
                        <div class="form-group">
							<label class="col-sm-3 control-label">Número de Teléfono</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="telefonoPs"
								value="<?php echo $row['telefono']?>" />
							</div>
						</div>
                        <div class="form-group">
							<label class="col-sm-3 control-label">Dirección</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="direccionPs"
								value="<?php echo $row['direccion']?>"/>
							</div>
						</div>
					</fieldset>
					<fieldset>
						<legend>Datos Laborales</legend>
                        <div class="no-move"></div>
                        <div class="form-group">
							<label class="col-sm-3 control-label">Tipo</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="tipo"
								value="<?php echo $row['idTipoEmpleado']?>" disabled />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Email</label>
							<div class="col-sm-3">
								<input type="text" class="form-control" name="emailPs" 
								value="<?php echo $row['email']?>" />
							</div>
							<div class="col-sm-5">
								<select class="populate placeholder" name="dominioEmail" id="dominioEmail">
								<?php while ($rsemail=mysqli_fetch_array($email)) {?>
                                <option value="<?php echo $rsemail['idEmpleado'] ?>" ><?php echo $rsemail['dominioEmail'] ?></option>
                           		<?php } ?> 
								</select>
							</div>
						</div>
                        <div class="form-group">
							<label class="col-sm-3 control-label">Área</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="area"
								value="<?php echo $row['idArea']?>" disabled />
							</div>
						</div>
                        <div class="form-group">
							<label class="col-sm-3 control-label">Puesto</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="puestoPs"
								value="<?php echo $row['puesto']?>" disabled />
							</div>
						</div>
					</fieldset>
					<div class="form-group">
						<div class="col-sm-9 col-sm-offset-3">
							<button type="submit" class="btn btn-primary">Confirmar</button>
                            <a href="main.php"><button type="button" class="btn btn-danger">Cancelar</button>
                            </a>             
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
