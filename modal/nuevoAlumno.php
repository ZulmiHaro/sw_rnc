
    <div class="modal fade" id="nuevoAlumno">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <!-- Modal Header -->
	      <div class="modal-header">
	        <h4 class="modal-title">Registrar Alumno</h4>
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	      </div>
	      <!-- Modal body -->
	      <div class="modal-body">
	        	<div class="box-content">
				<form id="nuevoAlumno" method="post" action="../php/registrarAlumno.php" class="form-horizontal">
					<fieldset>
						<legend>Datos Alumno</legend>                  
						<div class="form-group">
							<label class="col-sm-3 control-label">Tipo de Alumno</label>
							<div class="col-sm-5">
								<select class="populate placeholder" name="tipoAl" id="tipoAl">
								
                                <option value="1">Interno</option>
                                <option value="2">Externo</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Nombres</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="nombreA" id="nombreA"/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Apellido Paterno</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="apellidoPa" id="apellidoPa"/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Apellido Materno</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="apellidosMa" id="apellidosMa"/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Estado de Alumno</label>
							<div class="col-sm-5">
								<select class="populate placeholder" name="estadoAl" id="estadoAl">
								
                                <option value="1">Activo</option>
                                <option value="2">Retirado</option>
								</select>
							</div>
						</div>
					</fieldset>
				</form>
			</div>
	      </div>
	      <!-- Modal footer -->
	      <div class="modal-footer">
	        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
	        <button type="submit" class="btn btn-primary">Guardar</button>
	      </div>
	    </div>
	  </div>
	</div>