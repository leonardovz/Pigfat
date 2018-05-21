<?php include ('header.view.php');?>

   <div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<h2>Informacion Medica</h2>

				<!-- Tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li class="active"><a href="#seccion1" data-toggle="tab">Vacunas</a></li>
					<li><a href="#seccion2" data-toggle="tab">Medicamentos</a></li>
					<li><a href="#seccion3" data-toggle="tab">Anotaciones</a></li>
				</ul>

				<!-- Contenido -->
				<div class="tab-content">
					<div class="tab-pane fade in active" id="seccion1">
						<?php require 'views/Vacunas.view.php' ?>
					</div>
					<div class="tab-pane fade " id="seccion2">
                    	<?php require 'views/Medicamentos.view.php' ?>
					</div>
					<div class="tab-pane fade " id="seccion3">
						<div class="container">
							<header class="row">
								<div class="encabezado col-md-12">
									<h1>Notas de el Veterinario</h1>
									<h4>Registros</h4>
								</div>
							</header>
							<section class="main row">
								<article class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
									<h2>Revision General de la Granja</h2>
									<h4>Nombre del Veterinario....</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								</article>
							</section>
							<div class="row">
								<div class="col-md-12">
									<h3>Buscar Nota por</h3>
									<form class="form-inline" action="">
										
										<div class="form-group">
											<label for="date">Fecha</label>
											<input class="form-control disabled" type="date" id="date" placeholder="Fecha" readonly>
										</div>

										<div class="form-group">
											<label for="nombre">Nombre</label>
											<input class="form-control" type="text" id="nombre" placeholder="Nombre">
										</div>

										<button class="btn btn-success" type="submit">Buscar</button>
									</form>
									<br>
								</div>
							</div>
							<section class="widgets row">
								<div class="widget col-xs-12 col-sm-6 col-md-3">
									<h3>Titulo de la Nota</h3>
									<h4>Veterinario</h4>
									<h5>Fecha</h5>

									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium exercitationem fugit, sed rem atque consectetur cupiditate dolorum accusamus, sunt a.</p>
								</div>

								<div class="widget col-xs-12 col-sm-6 col-md-3">
									<h3>Titulo de la Nota</h3>
									<h4>Veterinario</h4>
									<h5>Fecha</h5>

									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium exercitationem fugit, sed rem atque consectetur cupiditate dolorum accusamus, sunt a.</p>
								</div>

								<div class="widget col-xs-12 col-sm-6 col-md-3">
									<h3>Titulo de la Nota</h3>
									<h4>Veterinario</h4>
									<h5>Fecha</h5>

									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium exercitationem fugit, sed rem atque consectetur cupiditate dolorum accusamus, sunt a.</p>
								</div>

								<div class="widget col-xs-12 col-sm-6 col-md-3">
									<h3>Titulo de la Nota</h3>
									<h4>Veterinario</h4>
									<h5>Fecha</h5>

									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium exercitationem fugit, sed rem atque consectetur cupiditate dolorum accusamus, sunt a.</p>
								</div>
							</section>

							<footer class="row">
								<div class="col-md-12">
									<h3>PigFat</h3>
									<h4>Centro universitario de los Altos</h4>
									
								</div>
							</footer>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include ('footer.view.php');?>