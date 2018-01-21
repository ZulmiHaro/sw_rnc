<?php
    include("../php/conexion.php");
    $cn = conectarse();
	$rsservicio="SELECT * FROM servicios ORDER BY idServicio";
    $servicio=mysqli_query($cn, $rsservicio);
    $row=mysqli_fetch_array($servicio);
    $rscurso="SELECT * FROM curso ORDER BY idCurso";
    $curso=mysqli_query($cn, $rscurso);
    $rsgrado="SELECT * FROM grado ORDER BY idGrado";
    $grado=mysqli_query($cn, $rsgrado);
    $rsalumno = "SELECT * FROM alumno ORDER BY idAlumno";
    $alumno = mysqli_query($cn,$rsalumno);
    $fecha=getdate();
?>
<div class="col-xs-12 col-sm-12">
		    <div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-usd"></i>
					<span>Pago en Caja</span>
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
				<form id="servicioPago" method="post" action="php/registrarPagoCaja.php" class="form-horizontal">
					<fieldset>
						<legend>Servicio</legend>
                        <div class="form-group">
							<label class="col-sm-3 control-label">Servicio</label>
							<div class="col-sm-5">
								<select class="populate placeholder" name="servicio" id="cboServicio" onchange="return mostrarMonto();">
								<?php while ($rsservicio=mysqli_fetch_array($servicio)) {?>
                                <option value="<?php echo $rsservicio['idServicio'] ?>" ><?php echo $rsservicio['descripcion'] ?></option>
                           		<?php } ?> 
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Monto</label>
							<div class="col-sm-2">
								<input type="text" class="form-control" name="monto" id="monto" disabled />
							</div>
						</div>
                        <div class="form-group">
							<label class="col-sm-3 control-label">Fecha de Pago</label>
							<div class="col-sm-3">
								<input type="text" class="form-control" name="fechaPago" value=" <?php echo date("Y-m-d");  ?>"  disabled/>
							</div>
						</div>
					</fieldset>
					<fieldset>
						<legend>Datos Alumno</legend>
                        <div class="no-move"></div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Código de Pago</label>
							<div class="col-sm-5">
								<select class="populate placeholder" name="codPago" id="cbocodPago">
								<?php while ($rsalumno=mysqli_fetch_array($alumno)) {?>
                                <option value="<?php echo $rsalumno['idAlumno'] ?>" ><?php 
                                echo $rsalumno['nombre']." ".$rsalumno['apellidoPa'] ?></option>
                           		<?php } ?> 
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Nombre de Alumno</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="nombreA" id="nombre" disabled />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Grado</label>
							<div class="col-sm-2">
								<input type="text" class="form-control" name="gradoA" id="grado" disabled/>
							</div>
						</div>
                        <div class="form-group">
							<label class="col-sm-3 control-label">Sección</label>
							<div class="col-sm-2">
								<input type="text" class="form-control" name="seccionA" id="seccion" disabled/>
							</div>
						</div>
						<div class="form-group" hidden class="label">
							<curs class="col-sm-3 control-label">Curso</label>
							<div class="col-sm-5">
								<select class="populate placeholder" name="curso" id="">
								<?php while ($rscurso=mysqli_fetch_array($curso)) {?>
                                <option value="<?php echo $rscurso['idCurso'] ?>" ><?php echo $rscurso['curso'] ?></option>
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
        </div>
    
<script type="text/javascript">
	function mostrarMonto()
	{
		var id = document.getElementById('cboServicio').value;
	}
</script>
<script>
$(document).on("ready", function () {
	$("#cboServicio").on("change", function () {
            $("#cboServicio option:selected").each(function(){
            	$id_servicio=$(this).val();
            	//$.post("php/buscarservicio.php",{id_servicio: id_servicio}, function(data){
            		//$("#monto").html(data);
            	console.log($id_servicio);
            	//});
            	$.ajax({
            		url:'php/buscarservicio.php',
            		type: 'POST',
            		dataType: 'json',
            		data:{id_servicio: $id_servicio}
            	}).done(function(respuesta){
            		console.log(respuesta);
            		$("#monto").val(respuesta.monto);
            	});
            });
        });


	$("#cbocodPago").on("change", function () {
            $("#cbocodPago option:selected").each(function(){
            	$id_alumno=$(this).val();
            	//$.post("php/buscarservicio.php",{id_servicio: id_servicio}, function(data){
            		//$("#monto").html(data);
            	console.log($id_alumno);
            	//});
            	$.ajax({
            		url:'php/buscaralumno.php',
            		type: 'POST',
            		dataType: 'json',
            		data:{id_alumno: $id_alumno}
            	}).done(function(respuesta){
            		console.log(respuesta);
            		$("#nombre").val(respuesta.Nombre);
            		$("#grado").val(respuesta.Grado);
            		$("#seccion").val(respuesta.Seccion);
            		
            	});
            });
        });
	});
</script>
