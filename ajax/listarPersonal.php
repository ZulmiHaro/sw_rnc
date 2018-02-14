<?php
    include("../php/conexion.php");
    $cn = conectarse();
    $rslistar = "SELECT * from empleado ORDER BY idEmpleado";
    $listar = mysqli_query($cn,$rslistar);
?>
<div class="col-xs-12 col-sm-12">
	<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-check-square-o"></i>
					<span>Registro de Personal</span>
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
							<th>DIRECCIÓN</th>
							<th>TELÉFONO</th>
							<th>DNI</th>
							<th>ÁREA</th>
							<th>FUNCIÓN</th>
							<th>PUESTO</th>
							<th>EMAIL</th>
							<TH>DOMINIO EMAIL</TH>
							<TH>ACCIÓN</TH>
						</tr>
					</thead>
					<tbody>
            		<?php
                		while ($rslistar=mysqli_fetch_array($listar)) {?>
            		<tr>
                		<td><?php echo $rslistar['idEmpleado'] ?></td>
                		<td><?php echo $rslistar['nombres'] ?></td>
                		<td><?php echo $rslistar['apellidosPa'] ?></td>
                		<td><?php echo $rslistar['apellidosMa'] ?></td>               
                		<td><?php echo $rslistar['direccion'] ?></td>  
                		<td><?php echo $rslistar['telefono'] ?></td>
                		<td><?php echo $rslistar['dni'] ?></td>
                		<td><?php echo $rslistar['idArea'] ?></td>               
                		<td><?php echo $rslistar['idTipoEmpleado'] ?></td>  
                		<td><?php echo $rslistar['puesto'] ?></td>
                		<td><?php echo $rslistar['email'] ?></td>
                		<td><?php echo $rslistar['dominioEmail'] ?></td>                         
            		    <td>
            		    	<form method="POST">         		    		
            		    		<a href="php/eliminarPersonal.php?id= <?php echo $rslistar['idEmpleado']; ?>"><button type="button" class="btn btn-danger btn-block">Eliminar</button></a>
            		    		<a href="editarPersonal.php?id= <?php echo $rslistar['idEmpleado']; ?>"><button type="button" class="btn btn-primary btn-block">Editar</button></a>
            		    		<a href="verContrato.php?id= <?php echo $rslistar['idEmpleado']; ?>"><button type="button" class="btn btn-warning btn-block">Ver Contrato</button></a>
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