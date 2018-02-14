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
				<a class="txt-default" id="gerencia"><i>Centros Académicos de Producción de Bienes y Servicios</i></a>
			</div>
			<div class="box">
				<div class="box-content" >
                    <form class="form-group" action="php/ingresar.php" id="formLogin">
					    <div class="text-center">
						    <h3 class="page-header">CEE Rafael Narváez Cadenillas</h3>
					    </div>
					    <div class="form-group">
						    <label class="control-label">Usuario</label>
						    <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Zulmi González" title="Ingrese Usuario" required autofocus />
					    </div>
					    <div class="form-group">
						    <label class="control-label">Password</label>
						    <input type="password" class="form-control" name="pass" id="pass" placeholder="Contraseña" title="Ingrese Password"  required/>
					    </div>
					    <div class="text-center">
						    <button id="btnIngresar" class="btn btn-primary" type="submit">INGRESAR</button>	    
					    </div>
                    </form>
				</div>
			</div>
		</div>
	</div>
	<?php
		include('php/footer.php');
	?>
	<script type="text/javascript">
		$(document).on("ready", function () {
			$("#formLogin button").on("submit", function (e) {
				e.preventDefault();
				//$usuario = $('#username').val();
				//$pass = $('#password').val();
				var frm = $(this).serialize();
				$.ajax({
					url: 'php/ingresar.php',
					type: 'POST',
					dataType: 'json',
					data: frm
				})
				.done(function(data){
						//console.log(data);
						//$(location).attr('href','../main.php');
						//header("Location: ../main.php");		
				})
				.fail(function(){				
						swal("Error!","Datos Incorrectos","error");										
				});
	    	});
		});
	</script>
</div>
</body>
</html>