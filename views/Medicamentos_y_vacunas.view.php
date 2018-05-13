<?php include ('header.view.php');?>

   <div class="container">
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
						<div class="container">
							<h1>Control Vacunas</h1>
							<div class="row">
								<section class="articulos">
									<?php foreach ($articulos as $articulo): ?>
										<div class="col-xs-12 col-sm-6 col-md-3">
												<div class="thumbnail">
													<a href="#">
														<img src='img/4.jpg' alt="">
													</a>
													<div class="caption">
														<h3><?php echo $articulo['ID'] . " "?>Landrace</h3>
														<p><?php echo $articulo['Descripcion'] ?></p>
														<p>
															<a href="#" class="btn btn-primary">Modificar</a>
															<a href="#" class="btn btn-default">Revisar</a>
														</p>
													</div>
												</div>
										</div>
									<?php endforeach ?>
								</section>
							</div>
							<section class="container">

								<ul class="pagination pagination-lg">
								<!-- Establecemos cuando el boton de retroceso estara habilitado -->
									<?php if ($pagina==1): ?>
										<li class="disabled"><span>&laquo;</span></li>
									<?php else: ?>
										<li><a href="?pagina=<?php echo $pagina - 1?>">&laquo;</a></li>
									<?php endif;?>
								<!-- Establecemos un ciclo para mostrar las paginas -->
									<?php   
									for ($i=1; $i <= $numeroPagina ; $i++){ 
										if ($pagina==$i) {
											echo "<li class='active'><a href='?pagina=$i'>$i <span class='sr-only'>(página actual)</span></a></li>";
										}else {
											echo "<li><a href='?pagina=$i'>$i</a></li>";
										}
									}
									?>
									<!-- Establecemos cuando el boton de siguiente estara desabuilitado -->
									<?php if ($pagina==$numeroPagina): ?>
									<li class="disabled"><span>&raquo;</span></li>
									<?php else: ?>
										<li><a href="?pagina=<?php echo $pagina + 1?>">&raquo;</a></li>
									<?php endif;?>
								</ul>
							</section>
						</div>
					</div>
					<div class="tab-pane fade " id="seccion2">
						<table class="table table-hover table-condensed">
							<thead>
								<tr>
									<th>ID</th>
									<th>Raza</th>
									<th>Edad</th>
									<th>Monta</th>
									<th>Monta 2</th>
									<th>Revisar</th>
									<th>Modificar</th>
									<th>Eliminar</th>
								</tr>
							</thead>

							<tr>
								<td >1</td>
								<td>Alejandro</td>
								<td>21</td>
								<td>idMonta</td>
								<td>idMonta2</td>
								<td><input type="button" value="Revisar" class="btn btn-default"></td>
								<td><input type="button" value="Modificar" class="btn btn-warning" ></td>
								<td><input type="button" value="Eliminar" class="btn btn-danger"></td>
							</tr>

							
							</tr>
						</table>
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