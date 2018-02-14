<?php
    include("../php/conexion.php");
    $cn = conectarse();
    //Detalles Operativos del Alumno
	$rsDetOp = "SELECT concat(alumno.nombre,' ',alumno.apellidoPa,' ',alumno.apellidosMa) as Alumno,detalles_operativos.idDetalleOperativo as idD, grado.descripcion as Grado,periodo.descripcion as Periodo, seccion.descripcion as Seccion
        FROM `detalles_operativos`
		INNER JOIN alumno on detalles_operativos.idAlumno=alumno.idAlumno
		INNER JOIN grado on detalles_operativos.idgrado=grado.idGrado
		INNER JOIN seccion on detalles_operativos.idseccion=seccion.idSeccion
		INNER JOIN periodo on detalles_operativos.idperiodo=periodo.idPeriodo";
    $DetOp = mysqli_query($cn,$rsDetOp);
    $fecha=getdate();
    $rslistar = "SELECT `idMatricula`,concat(alumno.nombre,' ',alumno.apellidoPa,' ',alumno.apellidosMa) as Alumno,`fechaMatricula`,`codMatricula`,`fechaPago`,`condicionAlumno` FROM `matricula` 
		INNER JOIN detalles_operativos on matricula.idDetallesOperativos = detalles_operativos.idDetalleOperativo
		INNER JOIN alumno on detalles_operativos.idAlumno = alumno.idAlumno order by idMatricula";
    $listar= mysqli_query($cn, $rslistar); ///ejecuto la consulta
?>
<div class="col-xs-12 col-sm-12">
	<div class="box">
		<div class="box-header">
			<div class="box-name">
					<i class="fa fa-usd"></i>
					<span>Matricula</span>
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
			<form id="nuevaMatricula" method="post" action="php/registrarMatricula.php" class="form-horizontal">
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
								<input type="text" class="form-control" name="codigo" required>
							</div>
					</div>
					<div class="form-group">
							<label class="col-sm-3 control-label">Fecha de Pago</label>
							<div class="col-sm-3">
								<input type="date" class="form-control" name="fechaPago" />
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

	<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-check-square-o"></i>
					<span>Matriculas de Alumnos</span>
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
							<th>FECHA MATRICULA</th>
							<th>COD.MATRICULA</th>
							<th>FECHA PAGO</th>
							<th>TIPO ALUMNO</th>
							<th>EDITAR</th>
						</tr>
					</thead>
					<tbody>
            		<?php
                		while ($rslistar=mysqli_fetch_array($listar)) {?>
            		<tr>
                		<td><?php echo $rslistar['idMatricula'] ?></td>
                		<td><?php echo $rslistar['Alumno'] ?></td>
                		<td><?php echo $rslistar['fechaMatricula'] ?></td>
                		<td><?php echo $rslistar['codMatricula'] ?></td>
                		<td><?php echo $rslistar['fechaPago'] ?></td>
                		<td><?php echo $rslistar['condicionAlumno'] ?></td>                                     
            			<td>
            		    	<form method="POST">         		    		
            		    		<a href="editarMatricula.php?id= <?php echo $rslistar['idMatricula']; ?>"><button type="button" class="btn btn-success btn-block">Editar</button></a>
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