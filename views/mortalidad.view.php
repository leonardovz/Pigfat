<?php include ('header.view.php');?>
	
    <div class="container">
		<h1>Datos de Mortalidad</h1>
		<div class="container">
			<div class="row">
				<h2>Registrar muerte</h2>
                <form action="matar.php" method="post" class="Formulario">
                    <div class="form-group">
                        <label for="tipo">Tipo de cerdo</label>
                        <select name="tipo" id="tipo" class="form-control">
                            <option value="cerdas" id="opcionCerda" selected>Reproductor Hembra</option>
                            <option value="cerdos">Reproductor Macho</option>
                            <option value="camadas" title="Incluye los muertos en los primeros 3 dias y 3 semanas">Cerdos en desarrollo y engorda</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Numero del animal</label>
                        <select name="cerdas" id="cerdas" class="form-control">
                           <option value="" disabled>Selecciona uno</option>
                            <?php foreach($idCerdas as $id): ?>
                                <option value="<?php echo $id[0] ?>"><?php echo $id[0]?>  Cerda Reproductora</option>
                            <?php endforeach ?>
                        </select>
                       <select name="cerdos" id="cerdos" class="form-control">
                           <option value="" disabled>Selecciona uno</option>
                            <?php foreach($idCerdos as $id):?>
                                <option value="<?php echo $id[0]?>"><?php echo $id[0]?>  Cerdo Reproductor</option>
                            <?php endforeach?>
                       </select>
                       <select name="camadas" id="camadas" class="form-control">
                           <option value="" disabled>Selecciona uno</option>
                            <?php foreach($idPartos as $id):?>
                                <option value="<?php echo $id[0]?>"><?php echo $id[0]?>  Camada</option>
                            <?php endforeach?>
                       </select>
                    </div>
                    <button class="btn btn-success btn-block btn-lg" type="submit">Registrar Muerte</button>
                </form>
			</div>
		</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<h2>Información</h2>
							<div class="panel-group" id="acordeon">
								<div class="panel panel-default">
									<div class="panel-heading" id="heading1">
										<h4 class="panel-title">
											<a href="#colapsable1" data-toggle="collapse" data-parent="#acordeon">
												Datos generales de mortalidad
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
																<th scope="row" id="total">Total de Muertes</th>
																<td><?php  echo $totalMuertos;?></td>
																
															</tr>
															<tr>
																<th scope="row" id="tresDias">Muertes en los primeros 3 d&iacute;as de vida</th>
																<td><?php echo $totalTresDias;?></td>
																
															</tr>
															<tr>
																<th scope="row" id="tresSemanas">Muertes en las primeras 3 semanas de vida</th>
																<td><?php echo $totalTresSemanas;?></td>
															</tr>
															<tr>
																<th scope="row" id="desarrollo">Muertes durante desarrollo o engorda</th>
																<td><?php echo $totalDesarrollo;?></td>
															</tr>
															<tr>
																<th scope="row" id="hembras">Muertes de hembras de reproducci&oacute;n</th>
																<td><?php echo $totalHembras;?></td>
															</tr>
															<tr>
																<th scope="row" id="machos">Muertes de machos reproductores</th>
																<td><?php echo $totalMachos;?></td>
															</tr>
														</tbody>
													</table>
												</section>
											</div>
										</div>
								</div>						
							</div>

					<div class="panel panel-default">
						<div class="panel-heading" id="heading2">
							<h4 class="panel-title">
								<a href="#colapsable2" data-toggle="collapse" data-parent="#acordeon">
								Reporte manual de mortalidad
								</a>
							</h4>
						</div>

						<div id="colapsable2" class="panel-collapse collapse" arial-labelledby="heading2">
							<div class="panel-body">
								<div class="row">
									<form action="mortalidad.php" method="post">
										<table class="table">
											<tbody>
													<tr>
														<th scope="col">Fecha de inicio del reporte</th>
														<th scope="col">Fecha de fin del reporte (si no se especifica la fecha, se tomara en cuenta la fecha del d&iacute;a)</th>
													</tr>
													<tr>
														<td scope="row"><input type="date" name="fechaInicio" required></th>
														<td scope="row"><input type="date" name="fechaFin" ></th>
													</tr>
													<tr>
														<th scope="row" colspan="2" align="center"><button type="submit" class="btn btn-primary">Generar informe</button></th>
													</tr>
											</tbody>
										</table>
									</form>
								</div>
								<?php if(isset($inicio)):?>
                                <div class="row">
                                    <section class="articulos ">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Descripci&oacute;n</th>
                                                    <th scope="col">Valores del <?php echo $inicio." al ". $fin?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row" id="total">Total de Muertes</th>
                                                    <td><?php  echo $totalMuertos2;?></td>

                                                </tr>
                                                <tr>
                                                    <th scope="row" id="tresDias">Muertes en los primeros 3 d&iacute;as de vida</th>
                                                    <td><?php echo $totalTresDias2;?></td>

                                                </tr>
                                                <tr>
                                                    <th scope="row" id="tresSemanas">Muertes en las primeras 3 semanas de vida</th>
                                                    <td><?php echo $totalTresSemanas2;?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" id="desarrollo">Muertes durante desarrollo o engorda</th>
                                                    <td><?php echo $totalDesarrollo2;?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" id="hembras">Muertes de hembras de reproducci&oacute;n</th>
                                                    <td><?php echo $totalHembras2;?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" id="machos">Muertes de machos reproductores</th>
                                                    <td><?php echo $totalMachos2;?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </section>
                                </div>
                                <?php endif?>
							</div>
						</div>
					</div>
						

					<div class="panel panel-default">
						<div class="panel-heading" id="heading3">
							<h4 class="panel-title">
								<a href="#colapsable3" data-toggle="collapse" data-parent="#acordeon">
									Gr&aacute;ficas
								</a>
							</h4>
						</div>

						<div id="colapsable3" class="panel-collapse collapse" arial-labelledby="heading3">
							
						</div>						
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
	<div class="row">
				<div class="col-md-6 col-md-offset-3">
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
								labels : ["Primeros 3 dias","Primeras 3 semanas","Desarrollo y engorda","Reproductoras","Reproductores"],
								datasets : [
									{
										fillColor : "#6b9dfa",
										strokeColor : "#ffffff",
										highlightFill: "#1864f2",
										highlightStroke: "#ffffff",
										data : ['<?php echo $b1?>','<?php echo $b2?>','<?php echo $b3?>','<?php echo $b4?>','<?php echo $b5?>']
									}
								]

							}
								
						
						var ctx3 = document.getElementById("chart-area3").getContext("2d");
						
						window.myPie = new Chart(ctx3).Bar(barChartData, {responsive:true});
						
					</script>
				</div>
			</div>
		</div>
			
        
    </div>
	<script src="js/jquery.js"></script>
	<script src="js/mortalidad.js"></script>
	<?php include ('footer.view.php');?>