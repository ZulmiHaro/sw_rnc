<?php
    include("../php/conexion.php");
    $cn = conectarse();  
    $rslistar = "SELECT * from requerimiento_producto order by idRequerimientoProd";
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
							<label class="col-sm-3 control-label">Producto</label>
							<div class="col-sm-3">
								<select class="populate placeholder" name="producto" id="producto">
								<?php while ($rsprod=mysqli_fetch_array($prod)) {?>
                                <option value="<?php echo $rsprod['idProducto'] ?>" ><?php echo $rsprod['nombreProd'] ?>	
                                </option>
                           		<?php } ?> 
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Cantidad</label>
							<div class="col-sm-2">
								<input type="number" class="form-control" name="cantidad" maxlength="10" required/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Descripción</label>
							<div class="col-sm-5">
								<textarea class="form-control" name="descripcion" id="descripcion" onKeyUp="this.value = this.value.toUpperCase();" required>			
								</textarea>
							</div>
						</div>
                        <div class="form-group">
							<label class="col-sm-3 control-label">Fecha</label>
							<div class="col-sm-3">
								<input type="text" class="fecha" name="fecha" value=" <?php echo date("Y-m-d");  ?>"  disabled/>
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
				<table class="table table-bordered table-striped table-hover table-heading table-datatable" id="datatable-1">
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
