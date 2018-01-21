<?php
include('php/conexion.php');
$cn= conectarse();
session_start();
$id = $_REQUEST['id'];
$rscuentas="SELECT * from producto where idProducto = '$id'";
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
					<span>Productos</span>
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
				<form method="post" action="php/modProducto.php?id= <?php echo $row['idProducto']; ?>" class="form-horizontal">
					<fieldset>
						<legend>Datos del Producto</legend>
						<div class="form-group">
							<label class="col-sm-3 control-label">Nombre</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="nombresP" required 
								value="<?php echo $row['nombreProd']?>" />
							</div>
						</div>
                        <div class="form-group">
							<label class="col-sm-3 control-label">Código</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="codigoP" required
								value="<?php echo $row['codigo']?>"/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Cantidad-Medida</label>
							<div class="col-sm-1">
								<input type="text" class="form-control" name="cantidadP" required
								value="<?php echo $row['cantidad']?>"/>
							</div>
							<div class="col-sm-1">
								<input type="text" class="form-control" name="medida" required
								value="<?php echo $row['medida']?>"/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Costo</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="costoP" required
								value="<?php echo $row['costo']?>"/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Descripción</label>
							<div class="col-sm-5">
								<textarea class="form-control" name="descripcionP" required
									value="<?php echo $row['descripcion']?>">			
								</textarea>
							</div>
						</div>
                        <div class="form-group">
							<label class="col-sm-3 control-label">Fecha de Ingreso</label>
							<div class="col-sm-3">
								<input type="text" class="fecha" name="fechaIP" value=" <?php echo date("Y-m-d");  ?>"  disabled/>
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
