<?php
include('php/conexion.php');
$cn= conectarse();
session_start();
$id = $_REQUEST['id'];
$rslistar = "SELECT * from empleado WHERE idEmpleado='$id'";
$listar = mysqli_query($cn,$rslistar);
$row = mysqli_fetch_array($listar);
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
				<form method="post" action="php/modempleado.php?id = <?php echo $row['idEmpleado']?>" class="form-horizontal">
					<fieldset>
						<legend>Datos Personales</legend>
						<div class="form-group">
							<label class="col-sm-3 control-label">Nombres</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="nombre" onKeyUp="this.value= this.value.toUpperCase();" value="<?php echo $row['nombres']?>" required />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Apellido Paterno</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="apellidoP" onKeyUp="this.value= this.value.toUpperCase();" value="<?php echo $row['apellidosPa']?>" required />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Apellido Materno</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="apellidoM" onKeyUp="this.value= this.value.toUpperCase();" value="<?php echo $row['apellidosMa']?>" required />
							</div>
						</div>
                        <div class="form-group">
							<label class="col-sm-3 control-label">DNI</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="dni" maxlength="8" 
								value="<?php echo $row['dni']?>" />
							</div>
						</div>
                        <div class="form-group">
							<label class="col-sm-3 control-label">Número de Teléfono</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="telefono" 
								value="<?php echo $row['telefono']?>" />
							</div>
						</div>
                        <div class="form-group">
							<label class="col-sm-3 control-label">Dirección</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="direccion" onKeyUp="this.value= this.value.toUpperCase();" value="<?php echo $row['direccion']?>" required />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Email</label>
							<div class="col-sm-3">
								<input type="text" class="form-control" name="email" id="email" 
								value="<?php echo $row['email']?>" />
							</div>
							<div class="col-sm-5">
								<select class="populate placeholder" name="dominio" id="dominio">
	                                <option value="@outlook.com">@OUTLOOK.COM</option>
	                                <option value="@outlook.es">@OUTLOOK.ES</option>
	                                <option value="@gmail.com">@GMAIL.COM</option>
	                                <option value="@hotmail.com">@HOTMAIL.COM</option>
	                                <option value="@hotmail.es">@HOTMAIL.ES</option>
	                                <option value="@yahoo.com">@YAHOO.COM</option>
	                                <option value="@unitru.edu.pe">@UNITRU.EDU.PE</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Estado Civil</label>
							<div class="col-sm-5">
								<select class="populate placeholder" name="estadocivil" id="estadocivil">
	                                <option value="SOLTERO">SOLTERO</option>
	                                <option value="CASADO">CASADO</option> 
	                                <option value="VIUDO">VIUDO</option>
	                                <option value="DIVORCIADO">DIVORCIADO</option>                     
								</select>
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
