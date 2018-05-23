<?php include ('header.view.php');?>

    <div class="container">
        <h1>Control de Maternidad</h1>
        <div class="row">
			<div class="panel-group" id="acordeon">
				<!-- Inicio de paginacion -->
				<div class="panel panel-default">
					<div class="panel-heading" id="heading1">
						<h4 class="panel-title">
							<a href="#colapsable1" data-toggle="collapse" data-parent="#acordeon">
								<?php  echo 'Hembras asignadas a maternidad';?>
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
													<h3><?php echo "ID Hembra: ".$articulo['idCerda'] . " "?></h3>
													<p>N&uacute;mero de parto: <?php echo $articulo['numPartos'] ?></p>
													<p>
														<a href="modificarhembra.php?idCerda=<?php echo $articulo['idCerda']?>" class="btn btn-primary">Modificar</a>
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
				</div>
				<!-- Fin de paginacion -->

				<!-- Inicio de informacion -->
				<div class="panel panel-default">
					<div class="panel-heading" id="heading2">
						<h4 class="panel-title">
							<a href="#colapsable2" data-toggle="collapse" data-parent="#acordeon">
								<?php  echo 'Expresi&oacute;n de informaci&oacute;n';?>
							</a>
						</h4>
					</div>
					<div id="colapsable2" class="panel-collapse collapse" arial-labelledby="heading2">
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
										<th scope="row" id="totalnacidos">N&uacute;mero de cerdas en reproducci&oacute;n</th>
										<td><?php  echo $totalHembras." nacidos";?></td>
									</tr>
									<tr>
										<th scope="row" id="totalpartos">N&uacute;mero total de partos por a&ntilde;o</th>
										<td><?php  echo $totalPartos." nacidos";?></td>
									</tr>
									<tr>
										<th scope="row" id="promedioFM">N&uacute;mero de hembras por semental</th>
										<td><?php  echo round($numFM,2);?></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<!-- Fin de informacion -->

				<!-- Inicio de graficas -->
				<!-- Fin de graficas -->
			</div>
		</div>
    </div>
	<?php include ('footer.view.php');?>