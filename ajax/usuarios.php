<?php 
	include("../php/conexion.php");
    $cn = conectarse();
    //Servicio
	$rsusuario="SELECT usuario.idUsuario as id, concat(empleado.nombres,' ',empleado.apellidosPa,' ',empleado.apellidosMa) as Nombre,concat(empleado.email,empleado.dominioEmail) as Email,usuario.user as Usuario,usuario.pass as Password FROM `usuario` 
		INNER JOIN empleado on usuario.idEmpleado=empleado.idEmpleado";
    $usuario=mysqli_query($cn, $rsusuario);
    //$row=mysqli_fetch_array($usuario);
    $rsEmpleado="SELECT `idEmpleado`,concat(empleado.nombres,' ',empleado.apellidosPa,' ',empleado.apellidosMa) as Empleado FROM `empleado` ORDER BY `idEmpleado` ASC";
    $empleado=mysqli_query($cn, $rsEmpleado);
?>
<div class="col-xs-12 col-sm-12">
	 <div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-pencil-square-o"></i>
					<span>Gestión de Usuarios</span>
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
				<form method="post" action="php/registrarUsuario.php" class="form-horizontal">
					<fieldset>
						<legend>Agregar Usuario</legend>
						<div class="form-group">
							<label class="col-sm-3 control-label">Empleado</label>
							<div class="col-sm-4">
								<select class="populate placeholder" name="empleado" id="empleado">
								<?php while ($rsEmpleado=mysqli_fetch_array($empleado)) {?>
                                <option value="<?php echo $rsEmpleado['idEmpleado'] ?>" ><?php echo $rsEmpleado['Empleado'] ?></option>
                           		<?php } ?> 
								</select>
							</div>
						</div>
                        <div class="form-group">
							<label class="col-sm-3 control-label">Usuario</label>
							<div class="col-sm-2">
								<input type="text" class="form-control" name="usuario" id="usuario" required/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Password</label>
							<div class="col-sm-2">
								<input type="text" class="form-control" name="clave" id="clave" required/>
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
					<i class="fa fa-table"></i>
					<span>Gestión de Usuarios</span>
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
				<table class="table table-striped table-bordered table-hover table-heading no-border-bottom">
					<thead>
						<tr>
							<th>#</th>
							<th>Nombres</th>
							<th>Usuario</th>
							<th>Password</th>
							<th>Email</th>
							<th>Editar</th>
							<th>Eliminar</th>
						</tr>
					</thead>
					<tbody>
					<?php
						while ($rsusuario=mysqli_fetch_array($usuario)) {?>
            		<tr>
                		<td><?php echo $rsusuario['id'] ?></td>
                		<td><?php echo $rsusuario['Nombre'] ?></td>             		
                		<td><?php echo $rsusuario['Usuario'] ?></td>               
                		<td><?php echo $rsusuario['Password'] ?></td>
                		<td><?php echo $rsusuario['Email'] ?></td>                        
            		    <td>
            		    	<form method="POST">         		    		
            		    		<a href="php/eliminarUsuario.php?id= <?php echo $rsusuario['id']; ?>"><button type="button" class="btn btn-danger btn-block">Eliminar</button></a>
            		    	</form>         				
            			</td>
            			<td>
            		    	<form method="POST">         		    		
            		    		<a href="editarUsuario.php?id= <?php echo $rsusuario['id']; ?>"><button type="button" class="btn btn-success btn-block">Editar</button></a>
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
