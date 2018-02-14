<?php
include('php/conexion.php');
$cn= conectarse();
session_start();
$id = $_REQUEST['id'];
$rsDetOp = "SELECT concat(alumno.nombre,' ',alumno.apellidoPa,' ',alumno.apellidosMa) as Alumno,detalles_operativos.idDetalleOperativo as idD, grado.descripcion as Grado,periodo.descripcion as Periodo, seccion.descripcion as Seccion
        FROM `detalles_operativos`
		INNER JOIN alumno on detalles_operativos.idAlumno=alumno.idAlumno
		INNER JOIN grado on detalles_operativos.idgrado=grado.idGrado
		INNER JOIN seccion on detalles_operativos.idseccion=seccion.idSeccion
		INNER JOIN periodo on detalles_operativos.idperiodo=periodo.idPeriodo";
$DetOp = mysqli_query($cn,$rsDetOp);
$rsmatricula = "SELECT * from matricula where idMatricula = '$id'";
$matricula = mysqli_query($cn,$rsmatricula);
$row = mysqli_fetch_array($matricula);
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
				<form id="nuevoAlumno" method="post" action="php/modMatricula.php?id= <?php echo $row['idMatricula']; ?>" class="form-horizontal">
					<fieldset>
					<legend>Datos Personales</legend> 
					<div class="form-group">
							<label class="col-sm-3 control-label">Alumno</label>
							<div class="col-sm-5">
								<select class="populate placeholder" name="detOp" id="detOp">
								<?php while ($rsDetOp=mysqli_fetch_array($DetOp)) {?>
                                <option value="<?php echo $rsDetOp['idD'] ?>" ><?php 
                                echo $rsDetOp['Alumno'] ?></option>
                           		<?php } ?> 
								</select>
							</div>
					</div>
					<div class="form-group">
							<label class="col-sm-3 control-label">Fecha de Matricula</label>
							<div class="col-sm-3">
								<input type="text" class="form-control" name="fechaMatricula" value=" <?php echo date("Y-m-d");  ?>" disabled/>
							</div>
					</div>
					<div class="form-group">
							<label class="col-sm-3 control-label">Código de Matricula</label>
							<div class="col-sm-3">
								<input type="text" class="form-control" name="codigo" value="<?php echo $row['codMatricula']?>" required>
							</div>
					</div>
					<div class="form-group">
							<label class="col-sm-3 control-label">Fecha de Pago</label>
							<div class="col-sm-3">
								<input type="date" class="form-control" name="fechaPago" value="<?php echo $row['fechaMatricula']?>" />
							</div>
					</div>
					<div class="form-group">
							<label class="col-sm-3 control-label">Condición de Alumno</label>
							<div class="col-sm-5">
								<select class="populate placeholder" name="condicion" id="condicion">
	                                <option value="REGULAR">REGULAR</option>
	                                <option value="DOC_UNT">DOCENTE UNT</option>     
	                                <option value="PH">PENSIÓN DE HERMANO</option> 
	                                <option value="NOR">NOR</option> 
	                                <option value="ADM_UNT "> ADM UNT </option>    
	                                <option value="A/D_RNC">A/D RNC</option>                                                
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
