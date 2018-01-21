<?php
    include("../php/conexion.php");
    $cn = conectarse(); 
 	$rstrabajador = "select * from tipo_trabajador order by idTipoEmpleado";
    $trabajador= mysqli_query($cn, $rstrabajador); 
    $rsarea = "select * from area order by idArea";
    $area= mysqli_query($cn, $rsarea); ///ejecuto la consulta
    $rsemail = "SELECT * from empleado ORDER BY idEmpleado";
    $email = mysqli_query($cn,$rsemail);
    $row = mysqli_fetch_array($email);
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
								<input type="text" class="form-control" name="nombre" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Apellido Paterno</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="apellidoP" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Apellido Materno</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="apellidoM" />
							</div>
						</div>
                        <div class="form-group">
							<label class="col-sm-3 control-label">DNI</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="dniPs" />
							</div>
						</div>
                        <div class="form-group">
							<label class="col-sm-3 control-label">Número de Teléfono</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="telefonoPs" />
							</div>
						</div>
                        <div class="form-group">
							<label class="col-sm-3 control-label">Dirección</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="direccionPs" />
							</div>
						</div>
					</fieldset>
					<fieldset>
						<legend>Datos Laborales</legend>
                        <div class="no-move"></div>
                        <div class="form-group">
							<label class="col-sm-3 control-label">Tipo de Trabajador</label>
							<div class="col-sm-5">
								<select class="populate placeholder" name="tipo" id="s2_country">
								<?php while ($rstrabajador=mysqli_fetch_array($trabajador)) {?>
                                <option value="<?php echo $rstrabajador['idTipoEmpleado'] ?>" ><?php echo $rstrabajador['descripcion'] ?></option>
                           		<?php } ?> 
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Email</label>
							<div class="col-sm-3">
								<input type="text" class="form-control" name="emailPs" />
							</div>
							<div class="col-sm-5">
								<select class="populate placeholder" name="dominioEmail" id="dominioEmail">
								<?php while ($rsemail=mysqli_fetch_array($email)) {?>
                                <option value="<?php echo $rsemail['idEmpleado'] ?>" ><?php echo $rsemail['dominioEmail'] ?></option>
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
                        <div class="form-group">
							<label class="col-sm-3 control-label">Puesto</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="puestoPs"/>
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
        </div>