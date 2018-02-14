<?php
    include("../php/conexion.php");
    $cn = conectarse();
    //Servicio
	$rsservicio="SELECT * FROM servicios ORDER BY idServicio";
    $servicio=mysqli_query($cn, $rsservicio);
    $row=mysqli_fetch_array($servicio);
    //Detalles Operativos del Alumno
	$rsDetOp = "SELECT concat(alumno.nombre,' ',alumno.apellidoPa,' ',alumno.apellidosMa) as Alumno,detalles_operativos.idDetalleOperativo as idD, grado.descripcion as Grado,periodo.descripcion as Periodo, seccion.descripcion as Seccion
        FROM `detalles_operativos`
		INNER JOIN alumno on detalles_operativos.idAlumno=alumno.idAlumno
		INNER JOIN grado on detalles_operativos.idgrado=grado.idGrado
		INNER JOIN seccion on detalles_operativos.idseccion=seccion.idSeccion
		INNER JOIN periodo on detalles_operativos.idperiodo=periodo.idPeriodo";
	$DetOp = mysqli_query($cn,$rsDetOp);
    $rscurso="SELECT * FROM curso ORDER BY idCurso";
    $curso=mysqli_query($cn, $rscurso);
    //$rsgrado="SELECT * FROM grado ORDER BY idGrado";
    //$grado=mysqli_query($cn, $rsgrado);
    //$rsalumno = "SELECT * FROM alumno ORDER BY idAlumno";
    //$alumno = mysqli_query($cn,$rsalumno);
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
								<select class="populate placeholder" name="servicio" id="cboServicio" >
								<?php while ($rsservicio=mysqli_fetch_array($servicio)) {?>
                                <option value="<?php echo $rsservicio['idServicio'] ?>" ><?php echo $rsservicio['descripcion'] ?></option>
                           		<?php } ?> 
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Monto S/.</label>
							<div class="col-sm-2">
								<input type="number" class="form-control" name="monto" id="monto" disabled />
							</div>
						</div>
                        <div class="form-group">
							<label class="col-sm-3 control-label">Fecha de Pago</label>
							<div class="col-sm-2">
								<input type="text" class="form-control" name="fechaPago" value=" <?php echo date("Y-m-d"); ?>" disabled/>
							</div>
						</div>
					</fieldset>
					<fieldset>
						<legend>Datos Alumno</legend>                   
						<div class="form-group">
							<label class="col-sm-3 control-label">Alumno</label>
							<div class="col-sm-5">
								<select class="populate placeholder" name="cboPago" id="cboPago">
								<?php while ($rsDetOp=mysqli_fetch_array($DetOp)) {?>
                                <option value="<?php echo $rsDetOp['idD'] ?>" ><?php 
                                echo $rsDetOp['Alumno'] ?></option>
                           		<?php } ?> 
								</select>
							</div>
						</div>
						<div class="form-group" class="label">
							<label class="col-sm-3 control-label">Curso</label>
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

<script>
	//$(document).on("onload", function () {
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
		//});
</script>

