<?php include ('header.view.php');?>

<div class="container">	
	<div class="row">
			<div class="col-md-12">
				<h2>Vista Control de Ventas</h2>
				<div class="panel-group" id="acordeon">
					<div class="panel panel-default">
						<div class="panel-heading" id="heading1">
							<h4 class="panel-title">
								<a href="#colapsable1" data-toggle="collapse" data-parent="#acordeon">
									Revisar Ventas
								</a>
							</h4>
						</div>

						<div id="colapsable1" class="panel-collapse collapse in" arial-labelledby="heading1">
							<div class="panel-body">
								<div class="container-fuild">
									<div class="row">
										<div class="col-md-12">
											<table class="table table-hover table-condensed">
												<thead>
													<tr>
														<th># Venta</th>
														<th>Fecha de venta</th>
														<th>Numero de Cerdos</th>
														<th>Kilos Totales</th>
														<th>Precio KG</th>
														<th>Peso Promedio</th>
														<th>Total Venta</th>
													</tr>
												</thead>
												<?php foreach($articulos as $articulo):?>
												<tr>
													<td><?php echo $articulo['idVenta']?></td>
													<td><?php echo $articulo['fechaVenta']?></td>
													<td><?php echo $articulo['numCerdos']?></td>
													<td><?php echo $articulo['kgTotales']?>kg</td>
													<td>$ <?php echo $articulo['precioKg']?>.00</td>
													<td><?php echo $articulo['pesoPromedioCerdo']?>kg</td>
													<td>$ <?php echo $articulo['totalDinero']?>.00</td>
													<td>                            
														<form action="php/eliminarVenta.php" method="post">
															<input name="id" type="hidden" value="<?php echo $articulo[0];?>">
															<input class = "btn btn-danger" type="submit" value="Eliminar">
														</form>
													</td>
													<td>
													<a href="<?php echo "MVentas.php?idVenta=$articulo[0]&fechaVenta=$articulo[1]&numCerdos=$articulo[2]&kgTotales=$articulo[3]&precioKg=$articulo[4]&pesoPromedioCerdo=$articulo[4]&totalDinero= $articulo[5]"; ?>" class="btn btn-primary btn-block">Modificar</a> 
													</td>
												</tr>
												<?php endforeach;?>
											</table>
										</div>
									</div>
									<section class="paginacion">
										<div class="row">
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
										</div>
										
									</section>
								</div>
							</div>
						</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-heading" id="heading2">
							<h4 class="panel-title">
								<a href="#colapsable2" data-toggle="collapse" data-parent="#acordeon">
									Realizar Nuevo Registro de Venta
								</a>
							</h4>
						</div>

						<div id="colapsable2" class="panel-collapse collapse" arial-labelledby="heading2">
							<div class="panel-body">
								<div class="container-fluid">
									<div class="row">
										<h1>Registro de Venta</h1>
										<form action="php/recibeVenta.php" method="POST" class="Formulario">
											<div class="form-group">
												<label for="numCorral">Numero de Cerdos</label>
												<input class="form-control" type="text" id="numCerdos" name="numCerdos" placeholder="Numero de Cerdos a vender" required>
											</div>
											<div class="form-group">
												<label for="idRaza">Kilogramos Totales</label>
												<input class="form-control" type="text" name="kgTotales" id="kgTotales" value= "400" required>
											</div>
											<div class="form-group">
												<label for="idRaza">Precio Por Kilogramo</label>
												<input class="form-control" type="text" name="precioKg" id="preciokg" placeholder = "Solo ingresa Numeros" required>
											</div>
											
											<button class="btn btn-success btn-block btn-lg" type="submit">Guardar Venta</button><br><br><br>
										</form>
									</div>
								</div>
							</div>
						</div>						
					</div>

					<div class="panel panel-default">
						<div class="panel-heading" id="heading3">
							<h4 class="panel-title">
								<a href="#colapsable3" data-toggle="collapse" data-parent="#acordeon">
									Elemento #3
								</a>
							</h4>
						</div>

						<div id="colapsable3" class="panel-collapse collapse" arial-labelledby="heading3">
							<div class="panel-body">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</div>
						</div>						
					</div>
				</div>
			</div>
		</div>
		
	</div>
	

</div>

<?php include ('footer.view.php');?>