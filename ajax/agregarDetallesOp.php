<?php 
	include("../php/conexion.php");
    $cn = conectarse();
    $rsalumno = "SELECT concat(alumno.nombre,' ',alumno.apellidoPa,' ',alumno.apellidosMa) as Alumno,`idAlumno`, `codPago`, `tipoAlumno`, `estadoAlumno`, `idApoderado` FROM `alumno` ORDER BY `idAlumno`";
    $alumno = mysqli_query($cn,$rsalumno);
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

    $rslistar = "SELECT idDetalleOperativo,concat(alumno.nombre,' ',alumno.apellidoPa,' ',alumno.apellidosMa) as Alumno,periodo.descripcion as Periodo,concat(grado.descripcion,'-',nivel.descripcion) as Grado,concat(seccion.descripcion,'-',grado.descripcion,' DE ',nivel.descripcion) as Seccion,concat(horario.horaEntrada,'-',horario.horaSalida) as Horario,`turno` FROM `detalles_operativos` 
		INNER JOIN alumno on detalles_operativos.idAlumno = alumno.idAlumno
		INNER JOIN periodo on detalles_operativos.idperiodo = periodo.idPeriodo
		INNER JOIN grado on detalles_operativos.idgrado = grado.idGrado
		INNER JOIN nivel on grado.idNivel=nivel.idNivel
		INNER JOIN seccion on detalles_operativos.idseccion = seccion.idSeccion
		INNER JOIN horario on detalles_operativos.idHorario = horario.idHorario order by idDetalleOperativo";
    $listar= mysqli_query($cn, $rslistar); ///ejecuto la consulta
?>
<div class="col-xs-12 col-sm-12">
	<div class="box">
		<div class="box-header">
			<div class="box-name">
					<i class="fa fa-usd"></i>
					<span>Detalles Operativos</span>
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
			<form method="post" action="php/registrarDetOp.php" class="form-horizontal">
				<fieldset>
					<legend>Detalles de Matricula</legend> 
					<div class="form-group">
						<label class="col-sm-3 control-label">Alumno</label>
						<div class="col-sm-5">
							<select class="populate placeholder" name="alumno" id="alumno">
							<?php while ($rsalumno=mysqli_fetch_array($alumno)) {?>
                               <option value="<?php echo $rsalumno['idAlumno'] ?>" ><?php 
                               echo $rsalumno['Alumno'] ?></option>
                           	<?php } ?> 
							</select>
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
                                <option value="Mañana">MAÑANA</option>
                                <option value="Tarde">TARDE</option>
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
	<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-check-square-o"></i>
					<span>Registro de Alumnos</span>
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
			<div class="box-content no-padding">
				<table class="table table-bordered table-striped table-hover table-heading table-datatable" id="datatable-1">
					<thead>
						<tr>
							<th>#</th>
							<th>ALUMNO</th>
							<th>PERIODO</th>
							<th>GRADO</th>
							<th>SECCIÓN</th>
							<th>HORARIO</th>
							<th>TURNO</th>
							<th>EDITAR</th>
						</tr>
					</thead>
					<tbody>
            		<?php
                		while ($rslistar=mysqli_fetch_array($listar)) {?>
            		<tr>
                		<td><?php echo $rslistar['idDetalleOperativo'] ?></td>
                		<td><?php echo $rslistar['Alumno'] ?></td>
                		<td><?php echo $rslistar['Periodo'] ?></td>
                		<td><?php echo $rslistar['Grado'] ?></td>
                		<td><?php echo $rslistar['Seccion'] ?></td>
                		<td><?php echo $rslistar['Horario'] ?></td>                
                		<td><?php echo $rslistar['turno'] ?></td>                       
            			<td>
            		    	<form method="POST">         		    		
            		    		<a href="editarDetOp.php?id= <?php echo $rslistar['idDetalleOperativo']; ?>"><button type="button" class="btn btn-success btn-block">Editar</button></a>
            		    	</form>         				
            			</td>
            		</tr>
            		<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
</div>
<script type="text/javascript">
// Run Datables plugin and create 3 variants of settings
function AllTables(){
	TestTable1();
	TestTable2();
	TestTable3();
	LoadSelect2Script(MakeSelect2);
}
function MakeSelect2(){
	$('select').select2();
	$('.dataTables_filter').each(function(){
		$(this).find('label input[type=text]').attr('placeholder', 'Search');
	});
}
$(document).ready(function() {
	// Load Datatables and run plugin on tables 
	LoadDataTablesScripts(AllTables);
	// Add Drag-n-Drop feature
	WinMove();
});
</script>