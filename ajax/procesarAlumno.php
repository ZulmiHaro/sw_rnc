<?php 
	include("../php/conexion.php");
    $cn = conectarse();
    $rsalumno = "SELECT `idAlumno`,concat(`nombre`,' ',`apellidoPa`,' ',`apellidosMa`) as Alumno,`codPago`,`tipoAlumno`,`estadoAlumno`,`idApoderado` FROM `alumno` ORDER BY idAlumno";
    $alumno = mysqli_query($cn,$rsalumno);
    $row = mysql_fetch_array($alumno);
?>
<div class="col-xs-12 col-sm-12">
	<div class="box">
		<div class="box-header">
			<div class="box-name">
					<i class="fa fa-usd"></i>
					<span>Procesar Alumno</span>
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
							<label class="col-sm-3 control-label">Alumno</label>
							<div class="col-sm-5">
								<select class="populate placeholder" name="alumno" id="cboalumno">
								<?php while ($rsalumno=mysqli_fetch_array($alumno)) {?>
                                <option value="<?php echo $rsalumno['idA'] ?>" ><?php 
                                echo $rsalumno['Alumno'] ?></option>
                           		<?php } ?> 
								</select>
							</div>
						</div>                 
						<div class="form-group">
							<label class="col-sm-3 control-label">Tipo de Alumno</label>
							<div class="col-sm-5">
								<select class="populate placeholder" name="tipo" id="tipo">						
                                <option value="Interno">INTERNO</option>
                                <option value="Externo">EXTERNO</option>
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
                                <option value="Activo">ACTIVO</option>
                                <option value="Retirado">RETIRADO</option>
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
<script>
	//$(document).on("onload", function () {
		$("#cboalumno").on("change", function () {
	            $("#cboalumno option:selected").each(function(){
	            	$id_alumno=$(this).val();
	            	//$.post("php/buscarservicio.php",{id_servicio: id_servicio}, function(data){
	            		//$("#monto").html(data);
	            	console.log($id_alumno);
	            	//});
	            	$.ajax({
	            		url:'php/buscarAlumno.php',
	            		type: 'POST',
	            		dataType: 'json',
	            		data:{id_alumno: $id_alumno}
	            	}).done(function(respuesta){
	            		console.log(respuesta);
	            		$("#monto").val(respuesta.monto);

	            	});
	            });
	        });
		//});
</script>