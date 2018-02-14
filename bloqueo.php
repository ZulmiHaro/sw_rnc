<?php
require_once('php/conexion.php');
$cn= conectarse();
session_start();
?>
<!DOCTYPE html>
<html>
<head>
		<?php
       	 	include('php/head.php');
    ?>
    	<link rel="icon" href="img/icon.ico">
</head>
<body onload="getTime()">
	<div class="container"> 	
	  		<div id="showtime"></div>
	  			<div class="col-lg-4 col-lg-offset-4">
	  				<div class="lock-screen">
		  				<h2><a data-toggle="modal" href="index.php"><i class="fa fa-lock"></i></a></h2>
				          <!-- Modal -->
		                  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="mybloqueo" class="modal fade">
                      <div class="modal-dialog">
                          <div class="modal-content">
                            <form method="post" action="main.php">
                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                  <h4 class="modal-title">Bienvenido</h4>
                              </div>
                              <div class="modal-body">
                                  <p class="centered"><img class="img-circle" width="80" src="img/NC-logo.png"></p>
                                  <input type="password" name="password" placeholder="Password" autocomplete="off" class="form-control placeholder-no-fix">
                              </div>
                              <div class="modal-footer centered">
                                  <button data-dismiss="modal" class="btn btn-theme04" type="button">Cancelar</button>
                                  <button class="btn btn-theme03" type="submit">Ingresar</button>
                              </div>
                            </form>
                          </div>
                      </div>
                  </div>
				          <!-- modal -->  				
	  				</div>  <!--/lock-screen -->
	  			</div><!-- /col-lg-4 -->  	
	  	</div><!-- /container -->
<script type="text/javascript" src="js/jquery.backstretch.min.js"></script>
<script>
        $.backstretch("img/login-bg.jpg", {speed: 500});
</script>
<script>
        function getTime()
        {
            var today=new Date();
            var h=today.getHours();
            var m=today.getMinutes();
            var s=today.getSeconds();
            // add a zero in front of numbers<10
            m=checkTime(m);
            s=checkTime(s);
            document.getElementById('showtime').innerHTML=h+":"+m+":"+s;
            t=setTimeout(function(){getTime()},500);
        }

        function checkTime(i)
        {
            if (i<10)
            {
                i="0" + i;
            }
            return i;
        }
    </script>
</body>
</html>