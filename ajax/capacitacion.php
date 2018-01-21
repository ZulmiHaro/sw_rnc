<?php
    include("../php/conexion.php");
    $cn = conectarse(); 
    $rscorreo = "select * from email order by idEmail";
    $correo= mysqli_query($cn, $rscorreo); ///ejecuto la consulta
    $rsarea = "select * from area order by idArea";
    $area= mysqli_query($cn, $rsarea); ///ejecuto la consulta
?>
<div class="col-xs-12 col-sm-12">
		    <div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-users"></i>
					<span>Capacitaciones</span>
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
				<form id="defaultForm" method="post" action="" class="form-horizontal">
					<fieldset>
						<legend>Datos del Personal</legend>
						<div class="form-group">
							<label class="col-sm-3 control-label">Solicitante</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="nombrePs" />
							</div>
						</div>
                        <div class="form-group">
							<label class="col-sm-3 control-label">DNI</label>
							<div class="col-sm-3">
								<input type="text" class="form-control" name="dniPs" />
							</div>
						</div>
                        <div class="form-group">
							<label class="col-sm-3 control-label">Número de Teléfono</label>
							<div class="col-sm-3">
								<input type="text" class="form-control" name="telefonoPs" />
							</div>
						</div>
                        <div class="form-group">
							<label class="col-sm-3 control-label">Email</label>
							<div class="col-sm-3">
								<input type="text" class="form-control" name="emailPs" />
							</div>
							<div class="col-sm-3">
								<select class="populate placeholder" name="tipo" id="s2_country">
								<?php while ($rscorreo=mysqli_fetch_array($correo)) {?>
                                <option value="<?php echo $rstrabajador['idEmail'] ?>" ><?php echo $rscorreo['dominio'] ?></option>
                           		<?php } ?> 
								</select>
							</div>
						</div>
                         <div class="form-group">
							<label class="col-sm-3 control-label">Área</label>
							<div class="col-sm-5">
								<select class="populate placeholder" name="area" id="s2_country">
									<?php while ($rsarea=mysqli_fetch_array($area)) {?>
                                		<option value="<?php echo $rsarea['idArea'] ?>" ><?php echo $rsarea['nombreArea'] ?></option>
                           			<?php } ?> 
								</select>
							</div>
						</div>
					</fieldset>
					<fieldset>
						<legend>Requerimientos</legend>
                        <div class="no-move"></div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Fecha de Solicitud</label>
							<div class="col-sm-3">
								<input type="text" class="fecha" name="fechaIP" value=" <?php echo date("Y-m-d");  ?>"  disabled/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Fecha de Inicio de Capacitación</label>
							<div class="col-sm-5">
								<input type="date" class="fecha" name="areaPs"/>
							</div>
						</div>
                        <div class="form-group">
							<label class="col-sm-3 control-label">Fecha de Termino de Capacitación</label>
							<div class="col-sm-5">
								<input type="date" class="fecha" name="puestoPs"/>
							</div>
						</div>
                        <div class="form-group">
							<label class="col-sm-3 control-label">Motivo</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="puestoPs"/>
							</div>
						</div>
                        <div class="form-group">
							<label class="col-sm-3 control-label">Tema</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="puestoPs"/>
							</div>
						</div>
                        <div class="form-group">
							<label class="col-sm-3 control-label">Lugar de Capacitación</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="puestoPs"/>
							</div>
						</div>
                        <div class="form-group">
							<label class="col-sm-3 control-label">Presupuesto Aprobado</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="puestoPs"/>
							</div>
						</div>
					</fieldset>
					<div class="form-group">
						<div class="col-sm-9 col-sm-offset-3">
							<button type="submit" class="btn btn-primary">Confirmar</button>
                            <button type="submit" class="btn btn-danger">Cancelar</button>
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