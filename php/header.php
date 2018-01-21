<div class="container-fluid expanded-panel">
		<div class="row">
			<div id="logo" class="col-xs-12 col-sm-2">
				<a href="main.php">OF. DE TESORERÍA</a>
			</div>
			<div id="top-panel" class="col-xs-12 col-sm-10">
				<div class="row">
					<div class="col-xs-8 col-sm-4">
						<div id="search">
							<input type="text" placeholder="Buscar"/>
							<i class="fa fa-search"></i>
						</div>
					</div>
					<div class="col-xs-4 col-sm-8 top-panel-right">
						<ul class="nav navbar-nav pull-right panel-menu">
							<li class="hidden-xs">
								<a class="ajax-link" href="ajax/manual.php" class="modal-link">
									<i class="fa fa-info-circle"></i>
								</a>
							</li>
							<li class="hidden-xs">
								<a href="bloqueo.php">
									<i class="fa fa-eye-slash"></i>
								</a>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle account" data-toggle="dropdown">
									<div class="avatar">
										<img src="img/avatar-1.png" class="img-circle" alt="avatar" />
									</div>
									<i class="fa fa-angle-down pull-right"></i>
									<div class="user-mini pull-right">
										<span class="welcome">Bienvenid@,</span>
										<p>  <?php echo $_SESSION['usuario']; ?></p>
									</div>
								</a>
								<ul class="dropdown-menu">
									<li>
										<a class="ajax-link" href="ajax/perfil.php">
											<i class="fa fa-user"></i>
											<span>Perfil</span>
										</a>
									</li>
									<li>
										<a href="index.php">
											<i class="fa fa-power-off"></i>
											<span>Salir</span>
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>