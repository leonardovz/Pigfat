<?php include ('header.view.php');?>

    <div class="container">
	
		<h1>Datos de Destete</h1>
		<div class="row">
			<div class="col-md-8 col-xs-12">
			<script src="js/Chart.js"></script>
				<div id="canvas-holder">
				<!-- <canvas id="chart-area" width="300" height="300"></canvas> -->
				<!-- <canvas id="chart-area2" width="300" height="300"></canvas> -->
				<canvas id="chart-area3" width="600" height="300"></canvas>
				<!-- <canvas id="chart-area4" width="600" height="300"></canvas> -->
				</div>
				<script>
				var pieData = [{value: 80,color:"#0b82e7",highlight: "#0c62ab",label: "Google Chrome"},
								{
									value: 16,
									color: "#e3e860",
									highlight: "#a9ad47",
									label: "Android"
								},
								{
									value: 11,
									color: "#eb5d82",
									highlight: "#b74865",
									label: "Firefox"
								},
								{
									value: 10,
									color: "#5ae85a",
									highlight: "#42a642",
									label: "Internet Explorer"
								},
								{
									value: 8.6,
									color: "#e965db",
									highlight: "#a6429b",
									label: "Safari"
								}
							];

					var barChartData = {
						labels : ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio"],
						datasets : [
							{
								fillColor : "#6b9dfa",
								strokeColor : "#ffffff",
								highlightFill: "#1864f2",
								highlightStroke: "#ffffff",
								data : [90,30,10,80,15,5,15]
							},
							{
								fillColor : "#e9e225",
								strokeColor : "#ffffff",
								highlightFill : "#ee7f49",
								highlightStroke : "#ffffff",
								data : [40,50,70,40,85,55,15]
							}
						]

					}
						var lineChartData = {
							labels : ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio"],
							datasets : [
								{
									label: "Primera serie de datos",
									fillColor : "rgba(220,220,220,0.2)",
									strokeColor : "#6b9dfa",
									pointColor : "#1e45d7",
									pointStrokeColor : "#fff",
									pointHighlightFill : "#fff",
									pointHighlightStroke : "rgba(220,220,220,1)",
									data : [90,30,10,80,15,5,15]
								},
								{
									label: "Segunda serie de datos",
									fillColor : "rgba(151,187,205,0.2)",
									strokeColor : "#e9e225",
									pointColor : "#faab12",
									pointStrokeColor : "#fff",
									pointHighlightFill : "#fff",
									pointHighlightStroke : "rgba(151,187,205,1)",
									data : [40,50,70,40,85,55,15]
								}
							]

						}
				// var ctx = document.getElementById("chart-area").getContext("2d");
				// var ctx2 = document.getElementById("chart-area2").getContext("2d");
				var ctx3 = document.getElementById("chart-area3").getContext("2d");
				// var ctx4 = document.getElementById("chart-area4").getContext("2d");
				// window.myPie = new Chart(ctx).Pie(pieData);
				// window.myPie = new Chart(ctx2).Doughnut(pieData);
				window.myPie = new Chart(ctx3).Bar(barChartData, {responsive:true});
				// window.myPie = new Chart(ctx4).Line(lineChartData, {responsive:true});
				</script>
			</div>
		</div>

        
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Expresi&oacute;n de informaci&oacute;n</h2>

				<div class="panel-group" id="acordeon">
					<div class="panel panel-default">
						<div class="panel-heading" id="heading1">
							<h4 class="panel-title">
								<a href="#colapsable1" data-toggle="collapse" data-parent="#acordeon">
									<?php  echo 'Datos generales del destete (los valores est&aacute;n redondeados)';?>
								</a>
							</h4>
						</div>

						<div id="colapsable1" class="panel-collapse collapse in" arial-labelledby="heading1">
							<div class="panel-body">
								<div class="row">
									<section class="articulos ">
									<table class="table">
										<thead>
											<tr>
												<th scope="col">Descripci&oacute;n</th>
												<th scope="col">Valor</th>
								
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">Total de lechones nacidos</th>
												<td><?php  echo $totalNacidos." nacidos";?></td>
												
											</tr>
											<tr>
												<th scope="row">Promedio de lechones por parto</th>
												<td><?php echo round(($totalPartos*100)/$totalNacidos,2).' cerdos/parto';?></td>
												
											</tr>
											<tr>
												<th scope="row">Total de lechones macho nacidos</th>
												<td><?php echo $totalMachosNacidos+$totalMachosMuertos.' machos';?></td>
											</tr>
											<tr>
												<th scope="row">Porcentaje de lechones macho nacidos por parto</th>
												<td><?php echo round((($totalMachosNacidos+$totalMachosMuertos)*100)/$totalNacidos,2).' %';?></td>
											</tr>
											<tr>
												<th scope="row">Total de lechones hembra nacidos</th>
												<td><?php  echo $totalHembrasVivas+$totalHembrasMuertas." hembras";?></td>
											</tr>
											<tr>
												<th scope="row">Porcentaje de lechones hembra nacidas por parto</th>
												<td><?php echo round(((($totalHembrasVivas+$totalHembrasMuertas)*100)/$totalNacidos),2).' %';?></td>
											</tr>
											<th scope="row">Precio promedio al nacer</th>
												<td><?php echo round($totalPromediosCamada/$totalNacidos,2).' kg';?></td>
											</tr>
											<tr>
												<th scope="row">Total de lechones destetados</th>
												<td><?php echo $totalCerdosLactancia; ?></td>
											</tr>
											<tr>
												<th scope="row">Peso promedio de los lechones al ser destetados</th>
												<td><?php echo round($totalPesoCamadaLactancia/$totalCerdosLactancia,2) . 'Kg'; ?></td>
											</tr>
										</tbody>
									</table>	
										<!-- <?php //foreach ($articulos as $articulo): ?>
											<div class="col-xs-12 col-sm-6 col-md-3">
													<div class="thumbnail">
														<a href="#">
															<img src='img/4.jpg' alt="">
														</a>
														<div class="caption">
															<h3><?//php echo $articulo['ID'] . " "?>Landrace</h3>
															<p><?//php echo $articulo['Descripcion'] ?></p>
															<p>
																<a href="#" class="btn btn-primary">Comprar</a>
																<a href="#" class="btn btn-default">Detalles</a>
															</p>
														</div>
													</div>
											</div>
										<?//php endforeach ?> -->
									</section>
								</div>
							</div>
						</div>						
					</div>

					<div class="panel panel-default">
						<div class="panel-heading" id="heading2">
							<h4 class="panel-title">
								<a href="#colapsable2" data-toggle="collapse" data-parent="#acordeon">
									Elemento #2
								</a>
							</h4>
						</div>

						<div id="colapsable2" class="panel-collapse collapse" arial-labelledby="heading2">
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
	<?php include ('footer.view.php');?>