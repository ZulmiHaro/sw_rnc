 <?php
	include('../php/conexion.php');
	$cn= conectarse();
	
	$rsusuario = "SELECT empleado.nombres,empleado.apellidosPa,empleado.apellidosMa, concat(empleado.email,empleado.dominioEmail) AS Email,empleado.direccion,empleado.dni,empleado.telefono,empleado.puesto,area.nombreArea,tipo_trabajador.descripcion
		FROM `usuario` 
		inner join empleado on usuario.idEmpleado=empleado.idEmpleado
		INNER join area on empleado.idArea=area.idArea 
		INNER join tipo_trabajador on empleado.idTipoEmpleado=tipo_trabajador.idTipoEmpleado 
		where usuario.idUsuario=1";
    $usuario= mysqli_query($cn, $rsusuario); ///ejecuto la consulta
    $row=mysqli_fetch_array($usuario);
    //para editar 

?>
 <div class="col-xs-12 col-sm-12">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-user-o"></i>
					<span>Perfil de Usuario</span>
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
				<form id="defaultForm" class="form-horizontal">
					<fieldset>
						<legend>Perfil de Usuario</legend>
						<div class="form-group">
							<label class="col-sm-3 control-label">Nombres</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="nombresU" 			
								 value="<?php echo $row[0] ?>" disabled/>
							</div>
						</div>
                        <div class="form-group">
							<label class="col-sm-3 control-label">Apellido Paterno</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="apellidosU" 
								value="<?php echo $row[1] ?>" disabled/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Apellido Materno</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="apellidosU" value="<?php echo $row[2]?>" disabled />
							</div>
						</div>
                        <div class="form-group">
							<label class="col-sm-3 control-label">Correo</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="correoU" 
								value="<?php echo $row[3]?>" disabled />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Dirección</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="direccion"
								value="<?php echo $row[4]?>" disabled  />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">DNI</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="dni"
								value="<?php echo $row[5]?>" disabled  />
							</div>
						</div>
					</fieldset>
					<fieldset>
						<legend>Datos Laborales</legend>
						<div class="form-group">
							<label class="col-sm-3 control-label">Área</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="area" 
								value="<?php echo $row[8]?>" disabled />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Cargo/Puesto</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="cargoU" 
								value="<?php echo $row[7]?>" disabled />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Tipo de Trabajador</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="cargoU" 
								value="<?php echo $row[9]?>" disabled />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Número</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="numeroU" 
								value="<?php echo $row[6]?>" disabled />
							</div>
						</div>
					</fieldset>
					<div class="form-group">
						<div class="col-sm-9 col-sm-offset-3">
							<a class="btn btn-primary" role="button" href="main.php">Confirmar</a>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editarPerfil">Editar</button>
						</div>                     
					</div>
				</form>
			</div>
	</div>
</div>
<!-- Modal Editar Perfil-->
<div id="editarPerfil" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Editar Perfil</h4>
      </div>
      <div class="modal-body">
        
      	<div class="box-content">		
				<form id="defaultForm" class="form-horizontal" method="post" action="..php/editarPerfil.php">
					<fieldset>
						<legend>Perfil de Usuario</legend>
						<div class="form-group">
							<label class="col-sm-3 control-label">Nombres</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="nombremodal" 			
								 value="<?php echo $row[0] ?>" />
							</div>
						</div>
                        <div class="form-group">
							<label class="col-sm-3 control-label">Apellido Paterno</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="apellidoPmodal" 
								value="<?php echo $row[1] ?>" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Apellido Materno</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="apellidosMmodal" value="<?php echo $row[2]?>"  />
							</div>
						</div>
                        <div class="form-group">
							<label class="col-sm-3 control-label">Correo</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="correomodal" 
								value="<?php echo $row[3]?>" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Dirección</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="direccionmodal"
								value="<?php echo $row[4]?>" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">DNI</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="dnimodal"
								value="<?php echo $row[5]?>" />
							</div>
						</div>
					</fieldset>
					<fieldset>
						<legend>Datos Laborales</legend>
						<div class="form-group">
							<label class="col-sm-3 control-label">Área</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="area" 
								value="<?php echo $row[8]?>" disabled/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Cargo/Puesto</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="cargoU" 
								value="<?php echo $row[7]?>" disabled/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Tipo de Trabajador</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="cargoU" 
								value="<?php echo $row[9]?>" disabled/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Número</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="numeroU" 
								value="<?php echo $row[6]?>" disabled/>
							</div>
						</div>
					</fieldset>
				</form>
			</div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" data-dismiss="modal">Confirmar</button>
      </div>
    </div>

  </div>
</div>