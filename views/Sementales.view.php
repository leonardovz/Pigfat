<?php include ('header.view.php');?>

    <div class="container">
        <h1>Sementales</h1>
        <div class="row">
			<div class="panel-group" id="acordeon">
				<!-- Inicio de paginacion -->
				<div class="panel panel-default">
					<div class="panel-heading" id="heading1">
						<h4 class="panel-title">
							<a href="#colapsable1" data-toggle="collapse" data-parent="#acordeon">
								<?php  echo 'Sementales';?>
							</a>
						</h4>
					</div>
					<div id="colapsable1" class="panel-collapse collapse in" arial-labelledby="heading1">
						<div class="panel-body">
							<section class="articulos">
								<?php foreach ($articulos as $articulo): ?>
									<div class="col-xs-12 col-sm-6 col-md-3">
											<div class="thumbnail">
												<a href="#">
													<img src='img/3.jpg' alt="">
												</a>
												<div class="caption">
													<h3><?php echo "ID Semental: ".$articulo['idCerdo'] . " "?></h3>
													<p>Fecha de nacimiento: <?php echo $articulo['fechaNacimiento'] ?></p>
													<p>
														<a href="modificarsemental.php?idCerdo=<?php echo $articulo['idCerdo']?>" class="btn btn-primary">Modificar</a>
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
				</div>
				<!-- Fin de paginacion -->
				<?php if($_SESSION['type']=='Admin' ):?>
				<!-- Inicio de desecho -->
				<div class="panel panel-default">
					<div class="panel-heading" id="heading2">
						<h4 class="panel-title">
							<a href="#colapsable2" data-toggle="collapse" data-parent="#acordeon">
								Desechar semental
							</a>
						</h4>
					</div>
					<div id="colapsable2" class="panel-collapse collapse" arial-labelledby="heading2">
						<div class="panel-body">
							<form action="php/desecharsemental.php" method="post">
								<div class="form-group">
									<label for="idCerdo">ID Semental</label>
									<select name="idCerdo" id="idCerdo" class="form-control">
									<?php 
										$sqlDesechar="SELECT idCerdo FROM sementales WHERE estadoCerdo='produccion'";
										$queryDesechar = mysql_query($sqlDesechar) or die (mysql_error());
										while($fila = mysql_fetch_array($queryDesechar)){//despliegue de columnas y filas
											echo"<option value='$fila[0]'>$fila[0]</option>"; 
										}
									?>
									</select>
								</div>
								<div class="form-group">
									<button class="btn btn-success btn-block btn-lg" type="submit">Desechar</button><br><br><br>
								</div>
							</form>
						</div>
					</div>
				</div>
				<!-- Fin de desecho -->

				<!-- Inicio de matar semental -->
				
					<div class="panel panel-default">
						<div class="panel-heading" id="heading3">
							<h4 class="panel-title">
								<a href="#colapsable3" data-toggle="collapse" data-parent="#acordeon">
									Semental muerto
								</a>
							</h4>
						</div>
						<div id="colapsable3" class="panel-collapse collapse" arial-labelledby="heading3">
							<div class="panel-body">
								<form action="php/sementalmuerto.php" method="post">
									<div class="form-group">
										<label for="idCerdo">ID Semental</label>
										<select name="idCerdo" id="idCerdo" class="form-control">
										<?php 
											$sqlDesechar="SELECT idCerdo FROM sementales WHERE estadoCerdo='produccion'";
											$queryDesechar = mysql_query($sqlDesechar) or die (mysql_error());
											while($fila = mysql_fetch_array($queryDesechar)){//despliegue de columnas y filas
												echo"<option value='$fila[0]'>$fila[0]</option>"; 
											}
										?>
										</select>
									</div>
									<div class="form-group">
										<button class="btn btn-success btn-block btn-lg" type="submit">Matar</button><br><br><br>
									</div>
								</form>
							</div>
						</div>
					</div>
				<?php endif;?>
				<!-- Fin de semental -->
				
				<!-- Inicio de expresion de informacion-->
				<div class="panel panel-default">
					<div class="panel-heading" id="heading4">
						<h4 class="panel-title">
							<a href="#colapsable4" data-toggle="collapse" data-parent="#acordeon">
								Expresi&oacute;n de informaci&oacute;n
							</a>
						</h4>
					</div>
					<div id="colapsable4" class="panel-collapse collapse" arial-labelledby="heading4">
						<div class="panel-body">
							<table class="table">
								<thead>
									<tr>
										<th scope="col">Descripci&oacute;n</th>
										<th scope="col">Valor</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row" id="totalnacidos">Total de sementales</th>
										<td><?php  echo round($totalSementalesProduccion,2);?> </td>
									</tr>
									<tr>
										<th scope="row" id="totalnacidos">Promedio de hermanos en al nacimiento</th>
										<td><?php  echo round($promedioSemNac,2);?> lechones / nacimiento</td>
									</tr>
									<tr>
										<th scope="row" id="totalnacidos">Promedio de hermanos en el destete</th>
										<td><?php  echo round($promedioSemDest,2);?> lechones / destete</td>
									</tr>
									<tr>
										<th scope="row" id="totalnacidos">Promedio de peso en el nacimiento</th>
										<td><?php  echo round($promedioPesoNac,2);?> kg</td>
									</tr>
									<tr>
										<th scope="row" id="totalnacidos">Promedio de peso en el destete</th>
										<td><?php  echo round($promedioPesoDest,2);?> kg</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<!-- Fin de expresion de informacion -->

				<!-- Inicio de graficas -->
				<!-- Fin de graficas -->
			</div>
		</div>
    </div>
	<?php include ('footer.view.php');?>