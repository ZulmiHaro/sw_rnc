<?php
	include("../php/conexion.php");
	$cn = conectarse();
	$rscuentas="SELECT * FROM cuenta order by idCuenta";
	$rsC = mysqli_query($cn,$rscuentas);
?>
<div class="col-xs-12 col-sm-12">
		    <div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-usd"></i>
					<span>Cuentas</span>
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
				<form method="post" action="php/regCuentas.php" class="form-horizontal">
					<fieldset>
						<legend>Registro de Cuentas</legend>
						<div class="form-group">
							<label class="col-sm-3 control-label">Nivel</label>
							<div class="col-sm-2">
								<input type="text" class="form-control" name="nivel" id="nivel" required />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Cuenta</label>
							<div class="col-sm-2">
								<input type="text" class="form-control" name="cuenta" id="cuenta" required />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Código</label>
							<div class="col-sm-2">
								<input type="text" class="form-control" name="codigo" id="codigo" required />
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
	<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-check-square-o"></i>
					<span>Registro de Cuentas Ingresados</span>
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
				<table class="table table-bordered table-striped table-hover table-heading table-datatable" id="datatable-3">
					<thead>
						<tr>
							<th>#</th>
							<th>CÓDIGO</th>
							<th>CUENTA</th>
							<th>NIVEL</th>
							<th>EDITAR</th>
							<TH>ELIMINAR</TH>
						</tr>
					</thead>
					<tbody>
            		<?php
                		while ($rscuentas=mysqli_fetch_array($rsC)) {?>
            		<tr>
                		<td><?php echo $rscuentas['idCuenta'] ?></td>
                		<td><?php echo $rscuentas['codigo'] ?></td>
                		<td><?php echo $rscuentas['cuenta'] ?></td>
                		<td><?php echo $rscuentas['nivel'] ?></td>                                        
            		    <td>
            		    	<form method="POST">         		    		
            		    		<a href="editarCuenta.php?id= <?php echo $rscuentas['idCuenta']; ?>"><button type="button" class="btn btn-success btn-block" >Editar</button></a>
            		    	</form>         				
            			</td>
            			<td>
            		    	<form method="POST">         		    		
            		    		<a href="php/eliminarCuenta.php?id= <?php echo $rscuentas['idCuenta']; ?>"><button type="button" class="btn btn-danger btn-block">Eliminar</button></a>
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
