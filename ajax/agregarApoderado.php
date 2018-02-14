<div class="col-xs-12 col-sm-12">
	<div class="box">
		<div class="box-header">
			<div class="box-name">
					<i class="fa fa-usd"></i>
					<span>Registrar Apoderado</span>
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
		<div class="box-content">
			<form id="nuevoApoderado" method="post" action="php/registrarApoderado.php" class="form-horizontal">
					<fieldset>
						<legend>Datos Personales</legend>                  
						<div class="form-group">
							<label class="col-sm-3 control-label">Nombres</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="nombre" id="nombre" onKeyUp="this.value= this.value.toUpperCase();" required />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Apellido Paterno</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="apellidoPa" id="apellidoPa" onKeyUp="this.value = this.value.toUpperCase();" required />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Apellido Materno</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="apellidoMa" id="apellidoMa" onKeyUp="this.value = this.value.toUpperCase();" required />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">DNI</label>
							<div class="col-sm-3">
								<input type="text" class="form-control" name="dni" id="dni" maxlength="8" required />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Teléfono</label>
							<div class="col-sm-3">
								<input type="text" class="form-control" name="telefono" id="telefono" maxlength="12"  required />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Teléfono Opcional</label>
							<div class="col-sm-3">
								<input type="text" class="form-control" name="telefono2" id="telefono2" maxlength="12" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Dirección</label>
							<div class="col-sm-3">
								<input type="text" class="form-control" name="direccion" id="direccion" required onKeyUp="this.value = this.value.toUpperCase();" />
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
					</fieldset>
					<fieldset>
						<legend>Datos Laborales</legend> 
						<div class="form-group">
							<label class="col-sm-3 control-label">Sector Laboral</label>
							<div class="col-sm-5">
								<select class="populate placeholder" name="sectorLaboral" id="sectorLaboral">
	                                <option value="PUBLICO">PUBLICO</option>
	                                <option value="PRIVADO">PRIVADO</option>                        
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Empleador</label>
							<div class="col-sm-3">
								<input type="text" class="form-control" name="empleador" id="empleador" required onKeyUp="this.value = this.value.toUpperCase();" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Facultad UNT</label>
							<div class="col-sm-3">
								<input type="text" class="form-control" name="facultadUNT" id="facultadUNT" onKeyUp="this.value = this.value.toUpperCase();" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Cargo UNT</label>
							<div class="col-sm-3">
								<input type="text" class="form-control" name="cargoUNT" id="cargoUNT" onKeyUp="this.value = this.value.toUpperCase();" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Condición UNT</label>
							<div class="col-sm-3">
								<input type="text" class="form-control" name="condicionUNT" id="condicionUNT"  onKeyUp="this.value = this.value.toUpperCase();" />
							</div>
						</div>
					</fieldset>
					<div class="form-group">
						<div class="col-sm-9 col-sm-offset-3">
							<button type="submit" class="btn btn-primary">Confirmar</button>
                            <a href="main.php" type="button" class="btn btn-danger">Cancelar</a>
						</div>                     
					</div>
				</form>
		</div>
	</div>
</div>