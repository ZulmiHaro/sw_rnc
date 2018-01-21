
<?php
    include("../php/conexion.php");
    $cn = conectarse();  
    $rslistar = "select * from requerimiento_producto order by idRequerimientoProd";
    $listar= mysqli_query($cn, $rslistar); ///ejecuto la consulta
    $rsprod = "SELECT * from producto order by idProducto";
    $prod= mysqli_query($cn, $rsprod); ///ejecuto la consulta
?>
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
				<form id="defaultForm" method="post" action="php/movimientosprod.php" class="form-horizontal">
					<fieldset>
						<legend>Requerimientos a Almacén</legend>
                        <div class="form-group">
							<label class="col-sm-3 control-label">Código</label>
							<div class="col-sm-3">
								<select class="populate placeholder" name="idProducto" id="idProducto">
								<?php while ($rsprod=mysqli_fetch_array($prod)) {?>
                                <option value="<?php echo $rsprod['idProducto'] ?>" ><?php echo $rsprod['idProducto'] ?></option>
                           		<?php } ?> 
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Cantidad</label>
							<div class="col-sm-1">
								<input type="text" class="form-control" name="cantidadP" required/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Descripción</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="descripcionP" required/>
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
			<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-check-square-o"></i>
					<span>Registro de Requerimientos</span>
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
				<table class="table table-bordered table-striped table-hover table-heading table-datatable" id="datatable-3">
					<thead>
						<tr>
							<th>ID REQUERIMIENTO</th>
							<th>CÓDIGO</th>
							<th>CANTIDAD</th>
							<th>DESCRIPCION</th>
                            <th>FECHA</th>
                            <th>EDITAR</th>
                            <TH>ELIMINAR</TH>
						</tr>
					</thead>
					<tbody>
            		<?php
                		while ($rslistar=mysqli_fetch_array($listar)) {?>
            		<tr>
                		<td><?php echo $rslistar['idRequerimientoProd'] ?></td>
                		<td><?php echo $rslistar['idProducto'] ?></td>
                		<td><?php echo $rslistar['cantidad'] ?></td>         
                		<td><?php echo $rslistar['descripcion'] ?></td>
                		<td><?php echo $rslistar['fecha'] ?></td> 
                		<td>
            				<form method="POST">         		    		
            		    		<a href="editarRequerimiento.php?id= <?php echo $rslistar['idRequerimientoProd']; ?>"><button type="button" class="btn btn-primary btn-block">Editar</button></a>
            		    	</form>
            			</td>
            			<td>
            				<form method="POST">         		    		
            		    		<a href="php/eliminarRequerimiento.php?id= <?php echo $rslistar['idRequerimientoProd']; ?>"><button type="button" class="btn btn-danger btn-block">Eliminar</button></a>
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