<?php
    include("../php/conexion.php");
    $cn = conectarse(); 
    $rscorreo = "select * from email order by idEmail";
    $correo= mysqli_query($cn, $rscorreo); ///ejecuto la consulta
    $rscurso= "select * from curso order by idCurso";
    $curso= mysqli_query($cn, $rscurso); ///ejecuto la consulta
    $rsgrado= "select * from grado order by idGrado";
    $grado= mysqli_query($cn, $rsgrado); ///ejecuto la consulta
    $rsseccion= "select * from seccion order by idSeccion";
    $seccion= mysqli_query($cn, $rsseccion); ///ejecuto la consulta
    $rsnivel= "select * from nivel order by idNivel";
    $nivel= mysqli_query($cn, $rsnivel); ///ejecuto la consulta
?>
<div id="agregarUsuario" class="modal fade" role="dialog">
	<div class="modal-dialog">	
		<!-- Modal content-->
    	<div class="modal-content">
    		<div class="modal-header">
		    	<div class="box">
					<div class="box-header">
						<div class="box-name">
							<i class="fa fa-plus"></i>
							<span>Agregar Usuario</span>
						</div>
						<div class="box-icons">
							<a class="collapse-link">
								<i class="fa fa-chevron-up"></i>
							</a>
							<a class="expand-link">
								<i class="fa fa-expand"></i>
							</a>
						</div>
						<div class="no-move"></div>
					</div>
				</div>
			</div>
			<div class="modal-body">
				<div class="box-content">
					<form id="defaultForm" method="post" action="" class="form-horizontal">
						<fieldset>
							<legend>Datos de Usuario</legend>
                        	<div class="no-move"></div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Nombre de Usuario</label>
								<div class="col-sm-3">
									<input type="text" class="form-control" name="userName" required />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Clave de Usuario</label>
								<div class="col-sm-3">
									<input type="text" class="form-control" name="userPass" required/>
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
								<label class="col-sm-3 control-label">Nivel</label>
								<div class="col-sm-5">
									<select class="populate placeholder" name="curso" id="">
									<?php while ($rsnivel=mysqli_fetch_array($nivel)) {?>
                        	        <option value="<?php echo $rsnivel['idNivel'] ?>" ><?php echo $rsnivel['descripcion'] ?></option>
                        	   		<?php } ?> 
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Grado</label>
								<div class="col-sm-5">
									<select class="populate placeholder" name="curso" id="">
									<?php while ($rsgrado=mysqli_fetch_array($grado)) {?>
                        	        <option value="<?php echo $rsgrado['idGrado'] ?>" ><?php echo $rsgrado['descripcion'] ?></option>
                        	   		<?php } ?> 
									</select>
								</div>
							</div>
                        	<div class="form-group">
								<label class="col-sm-3 control-label">Sección</label>
								<div class="col-sm-5">
									<select class="populate placeholder" name="curso" id="">
									<?php while ($rsseccion=mysqli_fetch_array($seccion)) {?>
                        	        <option value="<?php echo $rsseccion['idSeccion'] ?>" ><?php echo $rsseccion['descripcion'] ?>
                        	        </option>
                        	   		<?php } ?> 
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Curso</label>
								<div class="col-sm-5">
									<select class="populate placeholder" name="curso" id="">
									<?php while ($rscurso=mysqli_fetch_array($curso)) {?>
                        	        <option value="<?php echo $rscurso['idCurso'] ?>" ><?php echo $rscurso['descripcion'] ?></option>
                        	   		<?php } ?> 
									</select>
								</div>
							</div>
						</fieldset>
					</form>
				</div>
		    </div>
		    <div class="modal-footer">
        		<div class="form-group">
					<div class="col-sm-9 col-sm-offset-3">
						<button type="submit" onclick="ingresar();" class="btn btn-primary">Confirmar</button>
                    	<button type="submit" class="btn btn-danger">Cancelar</button>
					</div>                     
				</div>
      		</div>
		</div>
	</div>
</div>

<script type="text/javascript">
// Run Select2 on element
function Select2Test(){
	$("#product-select").select2();
}
$(document).ready(function() {
	// Load script of Select2 and run this
	LoadSelect2Script(Select2Test);
	WinMove();
});
</script>
