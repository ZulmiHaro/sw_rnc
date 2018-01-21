<?php
require_once('php/conexion.php');
$cn= conectarse();
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php
       	include('php/head.php');
    ?>
    <script src="js/jquery-1.10.2.min.js"></script>
    <link rel="icon" href="img/icon.ico">
</head>
<body>
<!--Start Header-->
<div id="screensaver">
	<canvas id="canvas"></canvas>
	<i class="fa fa-lock" id="screen_unlock"></i>
</div>
<div id="modalbox">
	<div class="devoops-modal">
		<div class="devoops-modal-header">
			<div class="modal-header-name">
				<span>Basic table</span>
			</div>
			<div class="box-icons">
				<a class="close-link">
					<i class="fa fa-times"></i>
				</a>
			</div>
		</div>
		<div class="devoops-modal-inner">
		</div>
		<div class="devoops-modal-bottom">
		</div>
	</div>
</div>
<header class="navbar">
	<?php
		include('php/header.php');
	?>
</header>
<!--End Header-->
<!--Start Container-->
<div id="main" class="container-fluid">
	<div class="row">
		<div id="sidebar-left" class="col-xs-2 col-sm-2">
			<?php
				include('php/sidebar.php');
			?>
		</div>
		<!--Start Content-->
		<div id="content" class="col-xs-12 col-sm-10">
			<div id="about">
				<div class="about-inner">
				</div>
			</div>
			
			<div class="row">
				<?php
					include('php/breadcrumb.php');
				?>
			</div>
			<div id="ajax-content">
				
			</div>
		</div>
		<!--End Content-->
	</div>
</div>
<?php 
	include('php/footer.php');
 ?>
</body>
</html>
