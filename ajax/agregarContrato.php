<?php
    include("../php/conexion.php");
    $cn = conectarse(); 
 	$rstrabajador = "SELECT `idEmpleado`,CONCAT(`nombres`,' ',`apellidosPa`,' ',`apellidosMa`) AS Empleado FROM `empleado`";
    $trabajador= mysqli_query($cn, $rstrabajador); 
    $rstipo = "SELECT * from tipo_Trabajador";
    $tipo= mysqli_query($cn, $rstipo); ///ejecuto la consulta
    $rsarea = "SELECT * from area";
    $area= mysqli_query($cn, $rsarea); ///ejecuto la consulta
    $rshorario="SELECT `idHorario`,concat(horario.horaEntrada,'-',horario.horaSalida) as Horario,`tipo` FROM `horario` ORDER BY `idHorario`";
    $horario= mysqli_query($cn,$rshorario);
?>
<div class="col-xs-12 col-sm-12">
		    <div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-pencil-square-o"></i>
					<span>Generar Contrato</span>
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
				<form id="defaultForm" method="post" action="php/registrarContrato.php" class="form-horizontal">
					<fieldset>
						<legend>Nuevo Contrato</legend>
						<div class="form-group">
							<label class="col-sm-3 control-label">Empleado</label>
							<div class="col-sm-5">
								<select class="populate placeholder" name="empleado" id="empleado">
								<?php while ($rstrabajador=mysqli_fetch_array($trabajador)) {?>
                                <option value="<?php echo $rstrabajador['idEmpleado'] ?>" ><?php 
                                echo $rstrabajador['Empleado'] ?></option>
                           		<?php } ?> 
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Tipo de Empleado</label>
							<div class="col-sm-5">
								<select class="populate placeholder" name="tipo" id=tipo">
								<?php while ($rtipo=mysqli_fetch_array($tipo)) {?>
                                <option value="<?php echo $rtipo['idTipoEmpleado'] ?>" ><?php 
                                echo $rtipo['descripcion'] ?></option>
                           		<?php } ?> 
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Área</label>
							<div class="col-sm-5">
								<select class="populate placeholder" name="area" id="area">
								<?php while ($rsarea=mysqli_fetch_array($area)) {?>
                                <option value="<?php echo $rsarea['idArea'] ?>" ><?php 
                                echo $rsarea['nombreArea'] ?></option>
                           		<?php } ?> 
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Horario</label>
							<div class="col-sm-5">
								<select class="populate placeholder" name="horario" id="horario">
								<?php while ($rshorario=mysqli_fetch_array($horario)) {?>
                                <option value="<?php echo $rshorario['idHorario'] ?>" ><?php 
                                echo $rshorario['Horario'] ?></option>
                           		<?php } ?> 
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Sueldo Asignado S/.</label>
							<div class="col-sm-3">
								<input type="text" class="form-control" name="sueldo" required />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Cargo</label>
							<div class="col-sm-5">
								<select class="populate placeholder" name="cargo" id="cargo">
	                                <option value="DIRECTOR">DIRECTOR</option>
	                                <option value="COORDINADOR">COORDINADOR</option> 
	                                <option value="RESPONSABLE">RESPONSABLE</option>
	                                <option value="TECNICO">TÉCNICO</option>
	                                <option value="AUXILIAR">AUXILIAR</option>
	                                <option value="ASISTENTE">ASISTENTE</option>
	                                <option value="PERSONAL">PERSONAL</option>
	                                <option value="DOCENTE">DOCENTE</option>
	                                <option value="JEFE">JEFE</option>                 
								</select>
							</div>
						</div>
                        <div class="form-group">
							<label class="col-sm-3 control-label">Entidad de Procedencia</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="procedencia" onKeyUp="this.value= this.value.toUpperCase();" />
							</div>
						</div>
                        <div class="form-group">
							<label class="col-sm-3 control-label">Fecha de Ingreso</label>
							<div class="col-sm-3">
								<input type="text" class="form-control" name="fechaIngreso" value=" <?php echo date("Y-m-d");  ?>" disabled/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Modo de Contrato</label>
							<div class="col-sm-5">
								<select class="populate placeholder" name="modoContrato" id="modoContrato">
	                                <option value="NOMBRADO">NOMBRADO</option>
	                                <option value="TEMPORAL">TEMPORAL</option>                 
								</select>
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