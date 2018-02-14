<?php 
	include("../php/conexion.php");
    $cn = conectarse();
    $rsalumno = "SELECT matricula.idMatricula as id,concat(alumno.nombre,' ',alumno.apellidoPa,' ',alumno.apellidosMa) as Alumno,alumno.codPago as codigo FROM `matricula` 
		INNER JOIN detalles_operativos on matricula.idDetallesOperativos=detalles_operativos.idDetalleOperativo
		INNER JOIN alumno on detalles_operativos.idAlumno = alumno.idAlumno";
    $alumno = mysqli_query($cn,$rsalumno);
    $rsservicio="SELECT `idServicio`,`codigo`,concat(`descripcion`,'-- S/.',`monto`) as monto FROM `servicios` ORDER by idServicio";
    $servicio=mysqli_query($cn, $rsservicio);
?>
<div class="col-xs-12 col-sm-12">
		    <div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-usd"></i>
					<span>Pago en Banco</span>
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
				<form id="servicioPago" method="post" action="php/registrarPagoBanco.php" class="form-horizontal">
					<fieldset>
						<legend>Datos de Pago</legend>
                        <div class="form-group">
							<label class="col-sm-3 control-label">Código de Alumno</label>
							<div class="col-sm-6">
								<select class="populate placeholder" name="codPagoAlumno" id="codPagoAlumno">
								<?php while ($rsalumno=mysqli_fetch_array($alumno)) {?>
                                <option value="<?php echo $rsalumno['id'] ?>" ><?php 
                                echo $rsalumno['codigo'] ?></option>
                           		<?php } ?> 
								</select>
							</div>
						</div>
                        <div class="form-group">
							<label class="col-sm-3 control-label">Monto de Servicio S/.</label>
							<div class="col-sm-5">
								<select class="populate placeholder" name="montoServicio" id="montoServicio">
								<?php while ($rsservicio=mysqli_fetch_array($servicio)) {?>
                                <option value="<?php echo $rsservicio['idServicio'] ?>" ><?php echo $rsservicio['monto'] ?></option>
                           		<?php } ?> 
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Mora S/.</label>
							<div class="col-sm-2">
								<input type="text" class="form-control" name="mora" id="mora" />
							</div>
						</div>
                        <div class="form-group">
							<label class="col-sm-3 control-label">Fecha de Pago</label>
							<div class="col-sm-3">
								<input type="Date" class="form-control" name="fechaPago"/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Hora de Pago</label>
							<div class="col-sm-3">
								<input type="time" class="form-control" name="horaPago"/>
							</div>
						</div>
					</fieldset>
					<fieldset>
						<legend>Datos de Banco</legend>
                        <div class="no-move"></div>
						
						<div class="form-group">
							<label class="col-sm-3 control-label">Nro. de Operación</label>
							<div class="col-sm-3">
								<input type="text" class="form-control" name="nroOperacion"/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Código de Agente</label>
							<div class="col-sm-3">
								<input type="text" class="form-control" name="codAgente"/>
							</div>
						</div>
                        <div class="form-group">
							<label class="col-sm-3 control-label">Código Terminalista</label>
							<div class="col-sm-3">
								<input type="text" class="form-control" name="codTerminalista"/>
							</div>
						</div>
					</fieldset>
					<div class="form-group">
						<div class="col-sm-9 col-sm-offset-3">
							<button type="submit" class="btn btn-primary" >Guardar</button>
                            <a href="main.php" type="button" class="btn btn-danger">Cancelar</a>
						</div>                     
					</div>
				</form>
			</div>
		    </div>
        </div>
<script type="text/javascript">
// Run Select2 plugin on elements
function DemoSelect2(){
	$('#s2_with_tag').select2({placeholder: "Select OS"});
	$('#s2_country').select2();
}
// Run timepicker
function DemoTimePicker(){
	$('#input_time').timepicker({setDate: new Date()});
}
$(document).ready(function() {
	// Create Wysiwig editor for textare
	TinyMCEStart('#wysiwig_simple', null);
	TinyMCEStart('#wysiwig_full', 'extreme');
	// Add slider for change test input length
	FormLayoutExampleInputLength($( ".slider-style" ));
	// Initialize datepicker
	$('#input_date').datepicker({setDate: new Date()});
	// Load Timepicker plugin
	LoadTimePickerScript(DemoTimePicker);
	// Add tooltip to form-controls
	$('.form-control').tooltip();
	LoadSelect2Script(DemoSelect2);
	// Load example of form validation
	LoadBootstrapValidatorScript(DemoFormValidator);
	// Add drag-n-drop feature to boxes
	WinMove();
});
</script>
<script type="text/javascript">
$(document).ready(function() {
	// Load TimePicker plugin and callback all time and date pickers
	LoadTimePickerScript(AllTimePickers);
	// Create jQuery-UI tabs
	$("#tabs").tabs();
	// Sortable for elements
	$(".sort").sortable({
		items: "div.col-sm-2",
		appendTo: 'div.box-content'
	});
	// Droppable for example of trash
	$(".drop div.col-sm-2").draggable({containment: '.dropbox' });
	$('#trash').droppable({
		drop: function(event, ui) {
			$(ui.draggable).remove();
		}
	});
	var icons = {
		header: "ui-icon-circle-arrow-e",
		activeHeader: "ui-icon-circle-arrow-s"
	};
	// Make accordion feature of jQuery-UI
	$("#accordion").accordion({icons: icons });
	// Create UI spinner
	$("#ui-spinner").spinner();
	// Add Drag-n-Drop to boxes
	WinMove();
});
</script>
