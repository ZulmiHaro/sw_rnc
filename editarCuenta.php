<?php
include('php/conexion.php');
$cn= conectarse();
session_start();
$id = $_REQUEST['id'];
$rscuentas="SELECT * FROM cuenta where idCuenta = '$id'";
$rsC = mysqli_query($cn,$rscuentas);
$row = mysqli_fetch_array($rsC);
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
					<span>Cuentas</span>
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
				<form method="post" action="php/modCuenta.php?id= <?php echo $row['idCuenta']; ?>" class="form-horizontal">
					<fieldset>
						<legend>Registro de Cuentas</legend>
						<div class="form-group">
							<label class="col-sm-3 control-label">Nivel</label>
							<div class="col-sm-2">
								<input type="text" class="form-control" name="nivel" id="nivel" required value="<?php echo $row['nivel']?>"/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Cuenta</label>
							<div class="col-sm-2">
								<input type="text" class="form-control" name="cuenta" id="cuenta" required value="<?php echo $row['cuenta']?>"/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Código</label>
							<div class="col-sm-2">
								<input type="text" class="form-control" name="codigo" id="codigo" required value="<?php echo $row['codigo']?>"/>
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
</div>
<?php 
	include('php/footer.php');
 ?>
</body>
</html>
