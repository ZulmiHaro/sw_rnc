<?php
    include("../php/conexion.php");
    $cn = conectarse(); 
    $rslistar = "SELECT `idEmpleado`,concat(empleado.nombres,' ',empleado.apellidosPa,' ',empleado.apellidosMa) as Empleado,`direccion`,`telefono`,`dni`,concat(`email`,`dominioEmail`) as Email,`estadoCivil`,`sexo`,`fechaNacimiento`,`fechaRegistro` FROM `empleado` ORDER by idEmpleado";
    $listar = mysqli_query($cn,$rslistar);
?>
<div class="col-xs-12 col-sm-12">
		    <div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-pencil-square-o"></i>
					<span>Datos del Personal</span>
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
				<form id="defaultForm" method="post" action="php/registrarempleado.php" class="form-horizontal">
					<fieldset>
						<legend>Datos Personales</legend>
						<div class="form-group">
							<label class="col-sm-3 control-label">Nombres</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="nombre" onKeyUp="this.value= this.value.toUpperCase();" required
 />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Apellido Paterno</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="apellidoP" onKeyUp="this.value= this.value.toUpperCase();" required
 />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Apellido Materno</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="apellidoM" onKeyUp="this.value= this.value.toUpperCase();" required
 />
							</div>
						</div>
                        <div class="form-group">
							<label class="col-sm-3 control-label">DNI</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="dni" maxlength="8" />
							</div>
						</div>
                        <div class="form-group">
							<label class="col-sm-3 control-label">Número de Teléfono</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="telefono" />
							</div>
						</div>
                        <div class="form-group">
							<label class="col-sm-3 control-label">Dirección</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="direccion" onKeyUp="this.value= this.value.toUpperCase();" required
 />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Email</label>
							<div class="col-sm-3">
								<input type="text" class="form-control" name="email" id="email" />
							</div>
							<div class="col-sm-5">
								<select class="populate placeholder" name="dominio" id="dominio">
	                                <option value="@outlook.com">@OUTLOOK.COM</option>
	                                <option value="@outlook.es">@OUTLOOK.ES</option>
	                                <option value="@gmail.com">@GMAIL.COM</option>
	                                <option value="@hotmail.com">@HOTMAIL.COM</option>
	                                <option value="@hotmail.es">@HOTMAIL.ES</option>
	                                <option value="@yahoo.com">@YAHOO.COM</option>
	                                <option value="@unitru.edu.pe">@UNITRU.EDU.PE</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Estado Civil</label>
							<div class="col-sm-5">
								<select class="populate placeholder" name="estadocivil" id="estadocivil">
	                                <option value="SOLTERO">SOLTERO</option>
	                                <option value="CASADO">CASADO</option> 
	                                <option value="VIUDO">VIUDO</option>
	                                <option value="DIVORCIADO">DIVORCIADO</option>                     
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Género</label>
							<div class="col-sm-5">
								<select class="populate placeholder" name="genero" id="genero">
	                                <option value="F">FEMENINO</option>
	                                <option value="M">MASCULINO</option>                    
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Fecha de Nacimiento</label>
							<div class="col-sm-3">
								<input type="date" class="form-control" name="fechaNacimiento" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Fecha de Registro</label>
							<div class="col-sm-3">
								<input type="text" class="form-control" name="fechaRegistro" value=" <?php echo date("Y-m-d");  ?>" disabled/>
							</div>
						</div>
					</fieldset>
					<div class="form-group">
						<div class="col-sm-9 col-sm-offset-3">
							<button type="submit" class="btn btn-primary">Confirmar</button>
                            <a href="main.php"><button type="button" class="btn btn-danger">Cancelar</button>
                            </a>             
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
							<th>PERSONAL</th>
							<th>DIRECCIÓN</th>
							<th>TELÉFONO</th>
							<th>DNI</th>
							<th>EMAIL</th>
							<th>ESTADO CIVIL</th>
							<th>GÉNERO</th>
							<th>F.NACIMIENTO</th>
							<th>F.REGISTRO</th>
							<TH>ACCIÓN</TH>
						</tr>
					</thead>
					<tbody>
            		<?php
                		while ($rslistar=mysqli_fetch_array($listar)) {?>
            		<tr>
                		<td><?php echo $rslistar['idEmpleado'] ?></td>
                		<td><?php echo $rslistar['Empleado'] ?></td>
                		<td><?php echo $rslistar['direccion'] ?></td>
                		<td><?php echo $rslistar['telefono'] ?></td>               
                		<td><?php echo $rslistar['dni'] ?></td>  
                		<td><?php echo $rslistar['Email'] ?></td>
                		<td><?php echo $rslistar['estadoCivil'] ?></td>
                		<td><?php echo $rslistar['sexo'] ?></td>               
                		<td><?php echo $rslistar['fechaNacimiento'] ?></td>  
                		<td><?php echo $rslistar['fechaRegistro'] ?></td>                        
            		    <td>
            		    	<form method="POST">         		    		
            		    		<a href="php/eliminarPersonal.php?id= <?php echo $rslistar['idEmpleado']; ?>"><button type="button" class="btn btn-danger btn-block">Eliminar</button></a>
            		    		<a href="editarPersonal.php?id= <?php echo $rslistar['idEmpleado']; ?>"><button type="button" class="btn btn-primary btn-block">Editar</button></a>
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