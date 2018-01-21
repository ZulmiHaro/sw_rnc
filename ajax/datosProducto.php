<?php
    include("../php/conexion.php");
    $cn = conectarse();
    $rslistar = "SELECT * from producto order by idProducto";
    $listar= mysqli_query($cn, $rslistar); ///ejecuto la consulta
?>
<div class="col-xs-12 col-sm-12">
		    <div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-pencil-square-o"></i>
					<span>Datos del Producto</span>
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
				<form method="post" action="php/registrarproductos.php" class="form-horizontal">
					<fieldset>
						<legend>Datos del Producto</legend>
						<div class="form-group">
							<label class="col-sm-3 control-label">Nombre</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="nombresP" id="nombresP" 
								required autofocus />
							</div>
						</div>
                        <div class="form-group">
							<label class="col-sm-3 control-label">Código</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="codigoP" id="codigoP" required/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Cantidad-Medida</label>
							<div class="col-sm-1">
								<input type="text" class="form-control" name="cantidadP" id="cantidadP" required/>
							</div>
							<div class="col-sm-1">
								<input type="text" class="form-control" name="medida" id="medida" required/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Costo</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="costoP" id="costoP" required/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Descripción</label>
							<div class="col-sm-5">
								<textarea class="form-control" name="descripcionP" id="descripcionP" required>			
								</textarea>
							</div>
						</div>
                        <div class="form-group">
							<label class="col-sm-3 control-label">Fecha de Ingreso</label>
							<div class="col-sm-3">
								<input type="text" class="fecha" name="fechaIP" 
									value=" <?php echo date("Y-m-d");  ?>"  disabled/>
							</div>
						</div>
					</fieldset>
					<div class="btn-group btn-group-justified">
						<div class="col-sm-9 col-sm-offset-3">
							<button type="submit" class="btn btn-primary btn-lg">GUARDAR</button>
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
					<span>Registro de Productos Ingresados</span>
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
							<th>#</th>
							<th>CÓDIGO</th>
							<th>NOMBRE</th>
							<th>CANTIDAD</th>
							<th>MEDIDA</th>
							<th>COSTO</th>
							<th>DESCRIPCIÓN</th>
							<th>FECHA DE INGRESO</th>
							<th>ELIMINAR</th>
							<th>EDITAR</th>
						</tr>
					</thead>
					<tbody>
            		<?php
                		while ($rslistar=mysqli_fetch_array($listar)) {?>
            		<tr>
                		<td><?php echo $rslistar['idProducto'] ?></td>
                		<td><?php echo $rslistar['codigo'] ?></td>
                		<td><?php echo $rslistar['nombreProd'] ?></td>
                		<td><?php echo $rslistar['cantidad'] ?></td>               
                		<td><?php echo $rslistar['medida'] ?></td>  
                		<td><?php echo $rslistar['costo'] ?></td>
                		<td><?php echo $rslistar['descripcion'] ?></td>
                		<td><?php echo $rslistar['fecha'] ?></td>                        
            		    <td>
            		    	<form method="POST">         		    		
            		    		<a href="php/eliminarProducto.php?id= <?php echo $rslistar['idProducto']; ?>"><button type="button" class="btn btn-danger btn-block">Eliminar</button></a>
            		    	</form>         				
            			</td>
            			<td>
            		    	<form method="POST">         		    		
            		    		<a href="editarProducto.php?id= <?php echo $rslistar['idProducto']; ?>"><button type="button" class="btn btn-success btn-block">Editar</button></a>
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

