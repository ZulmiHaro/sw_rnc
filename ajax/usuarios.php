<div class="col-xs-12 col-sm-12">
		<div class="caption">
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#agregarUsuario">NUEVO USUARIO</button>
		</div>
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
							<th>Operaciones</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>Oracle</td>
							<td>OracleDB</td>
							<td>http://oracle.com</td>
							<td>SQL server</td>
							<td>
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#agregarUsuario">NUEVO USUARIO</button>
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#agregarUsuario">NUEVO USUARIO</button>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
</div>
<?php 
 	include('../modal/agregarUsuario.php');
?>
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
