<?php
    include("php/conexion.php");
    $cn = conectarse(); 
    session_start(); 
    $id = $_REQUEST['id'];
    $rslistar = "SELECT * from requerimiento_producto WHERE idRequerimientoProd='$id'";
    $listar= mysqli_query($cn, $rslistar); ///ejecuto la consulta
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
					<i class="fa fa-file-text-o"></i>
					<span>Requerimientos</span>
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
				<form id="defaultForm" method="post" action="php/modMovimiento.php?id= <?php echo $row['idRequerimientoProd']; ?>" class="form-horizontal">
					<fieldset>
						<legend>Requerimientos a Almacén</legend>
                        <div class="form-group">
							<label class="col-sm-3 control-label">Código</label>
							<div class="col-sm-1">
								<input type="text" class="form-control" name="idProducto" required
								value="<?php echo $row['idProducto']?>" disabled />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Cantidad</label>
							<div class="col-sm-1">
								<input type="text" class="form-control" name="cantidadP" required
								value="<?php echo $row['cantidad']?>" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Descripción</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="descripcionP" required 
								value="<?php echo $row['descripcion']?>"/>
							</div>
						</div>
                        <div class="form-group">
							<label class="col-sm-3 control-label">Fecha</label>
							<div class="col-sm-3">
								<input type="text" class="fecha" name="fechaIP" value=" <?php echo date("Y-m-d");  ?>"  disabled/>
							</div>
						</div>
					</fieldset>
					<div class="btn-group btn-group-justified">
						<div class="col-sm-9 col-sm-offset-3">
							<button type="submit" class="btn btn-primary btn-lg">Confirmar</button>             
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
