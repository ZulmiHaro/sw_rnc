<?php 
	include("../php/conexion.php");
    $cn = conectarse();
    $rsapoderado ="SELECT `idApoderado`,concat(`nombres`,' ',`apellidoPa`,' ',`apellidosMa`) as Apoderado FROM `apoderado`";
    $apoderado= mysqli_query($cn,$rsapoderado);
    
    $rslistar = "SELECT idAlumno,nombre,alumno.apellidoPa as Paterno,alumno.apellidosMa as Materno,codPago,tipoAlumno,estadoAlumno,alumno.idApoderado,
		concat(apoderado.nombres,' ',apoderado.apellidoPa,' ',apoderado.apellidosMa) as Apoderado FROM `alumno` 
		INNER JOIN apoderado on alumno.idApoderado = apoderado.idApoderado";
    $listar= mysqli_query($cn, $rslistar); ///ejecuto la consulta
?>
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
				<form id="nuevoAlumno" method="post" action="php/registrarAlumno.php" class="form-horizontal">
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
								<input type="text" class="form-control" name="nombre" id="nombre" onKeyUp="this.value= this.value.toUpperCase();" required />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Apellido Paterno</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="apellidoPa" id="apellidoPa" onKeyUp="this.value = this.value.toUpperCase();" required />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Apellido Materno</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="apellidoMa" id="apellidoMa" onKeyUp="this.value = this.value.toUpperCase();" required />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Código de Pago</label>
							<div class="col-sm-3">
								<input type="text" class="form-control" name="codigoPago" id="codigoPago" required />
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
							<th>NOMBRE</th>
							<th>APELLIDO PATERNO</th>
							<th>APELLIDO MATERNO</th>
							<th>COD.PAGO</th>
							<th>TIPO ALUMNO</th>
							<th>ESTADO ALUMNO</th>
							<th>APODERADO</th>
							<th>EDITAR</th>
						</tr>
					</thead>
					<tbody>
            		<?php
                		while ($rslistar=mysqli_fetch_array($listar)) {?>
            		<tr>
                		<td><?php echo $rslistar['idAlumno'] ?></td>
                		<td><?php echo $rslistar['nombre'] ?></td>
                		<td><?php echo $rslistar['Paterno'] ?></td>
                		<td><?php echo $rslistar['Materno'] ?></td>
                		<td><?php echo $rslistar['codPago'] ?></td>
                		<td><?php echo $rslistar['tipoAlumno'] ?></td>                
                		<td><?php echo $rslistar['estadoAlumno'] ?></td> 
                		<td><?php echo $rslistar['Apoderado'] ?></td>                      
            			<td>
            		    	<form method="POST">         		    		
            		    		<a href="editarAlumno.php?id= <?php echo $rslistar['idAlumno']; ?>"><button type="button" class="btn btn-success btn-block">Editar</button></a>
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