<!DOCTYPE html>
<html lang="en">
	<head>	
		<?php
       	 	include('php/head.php');
    	?>
    	<link rel="icon" href="img/icon.ico">
	</head>
<body>
<div class="container-fluid">
	<div id="page-login" class="row">
		<div class="col-xs-12 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
			<div class="text-right">
				<a href="http://gcpunt.azurewebsites.net" class="txt-default"  id="gerencia"><i>Centros Académicos de Producción de Bienes y Servicios</i></a>
			</div>
			<div class="box">
				<div class="box-content" >
                    <form class="form-group" action="php/ingresar.php" id="formLogin">                          
					    <div class="text-center">
						    <h3 class="page-header">CEE Rafael Narváez Cadenillas</h3>
					    </div>
					    <div class="form-group">
						    <label class="control-label">Usuario</label>
						    <input type="text" class="form-control" id="username" name="username" placeholder="Zulmi González" title="Ingrese Usuario" required autofocus />
					    </div>
					    <div class="form-group">
						    <label class="control-label">Password</label>
						    <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" title="Ingrese Password"  required/>
					    </div>
					    <div class="text-center">
						    <button class="btn btn-primary" >Ingresar</button>						    
					    </div>
                    </form>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="js/devoops.js"></script>
<script src="js/main.js"></script>
<script src="js/sweetalert.min.js"></script>
</body>
</html>