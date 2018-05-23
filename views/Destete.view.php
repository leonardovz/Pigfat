<?php include ('header.view.php');?>
	
    <div class="container">
		<h1>Datos de Destete</h1>
		<div class="container">
			<div class="row">
				<h1>Designar destete a engorda</h1>
				<form action="php/asignarEngorda.php" method="POST" class="Formulario">
					<input type="text" name="idCorral" id="idCorral" style= "display:none;" >
					<div class="form-group">
						<label for="idParto">Id del parto</label>
						<select name="idParto" id="idParto" class="form-control">
							<?php 
								$sqlDestete="SELECT idParto FROM partos WHERE estado='destete'";
								$queryDestete = mysql_query($sqlDestete) or die (mysql_error());
								while($fila = mysql_fetch_array($queryDestete)){//despliegue de columnas y filas
									echo"<option value='$fila[0]'>$fila[0]</option>"; 
								}
							?>
						</select>
					</div>
					
					<div class="form-group">
						<label for="pesoCamada">Peso camada</label>
						<input type="text" class="form-control" name="pesoCamada" id="pesoCamada" required>
					</div>
					<div class="form-group">
						<label for="numCerdos">No. de cerdos en la camada</label>
						<input type="text" class="form-control" name="numCerdos" id="numCerdos" required>
					</div>
					<div class="form-group">
						<label for="diasLactancia">Dias de lactancia</label>
						<input type="text" class="form-control" name="diasLactancia" id="diasLactancia" required>
					</div>
					<button class="btn btn-success btn-block btn-lg" type="submit">Modificar</button><br><br><br>
				</form>
			</div>
		</div>
			<div class="container-fluid">
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
																<th scope="row" id="totalnacidos">Total de lechones nacidos</th>
																<td><?php  echo $totalNacidos." nacidos";?></td>
																
															</tr>
															<tr>
																<th scope="row" id="promedioparto">Promedio de lechones por parto</th>
																<td><?php echo round(($totalPartos*100)/$totalNacidos,2).' cerdos/parto';?></td>
																
															</tr>
															<tr>
																<th scope="row" id="totalmachos">Total de lechones macho nacidos</th>
																<td><?php echo $totalMachosNacidos+$totalMachosMuertos.' machos';?></td>
															</tr>
															<tr>
																<th scope="row" id="porcentajemachos">Porcentaje de lechones macho nacidos por parto</th>
																<td><?php echo round((($totalMachosNacidos+$totalMachosMuertos)*100)/$totalNacidos,2).' %';?></td>
															</tr>
															<tr>
																<th scope="row" id="totalhembras">Total de lechones hembra nacidos</th>
																<td><?php  echo $totalHembrasVivas+$totalHembrasMuertas." hembras";?></td>
															</tr>
															<tr>
																<th scope="row" id="porcentajehembras">Porcentaje de lechones hembra nacidas por parto</th>
																<td><?php echo round(((($totalHembrasVivas+$totalHembrasMuertas)*100)/$totalNacidos),2).' %';?></td>
															</tr>
															<th scope="row" id="pesonacimiento">Peso promedio al nacer</th>
																<td><?php echo round($totalPromediosCamada/$totalNacidos,2).' kg';?></td>
															</tr>
															<tr>
																<th scope="row" id="totaldestetados">Total de lechones destetados</th>
																<td><?php echo $totalCerdosLactancia; ?></td>
															</tr>
															<tr>
																<th scope="row" id="pesodestete">Peso promedio de los lechones al ser destetados</th>
																<td><?php echo round($totalPesoCamadaLactancia/$totalCerdosLactancia,2) . 'Kg'; ?></td>
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
								<?php  echo 'Reporte manual de destete';?>
								</a>
							</h4>
						</div>

						<div id="colapsable2" class="panel-collapse collapse" arial-labelledby="heading2">
							<div class="panel-body">
								<div class="row">
									<form action="php/reporteDestete.php" method="post">
										<table class="table">
											<tbody>
													<tr>
														<th scope="col">Fecha de inicio del reporte</th>
														<th scope="col">Fecha de fin del reporte (si no se especifica la fecha, se tomara en cuenta la fecha del d&iacute;a)</th>
													</tr>
													<tr>
														<td scope="row"><input type="date" name="fechainicio" required></th>
														<td scope="row"><input type="date" name="fechafin" ></th>
													</tr>
													<tr>
														<th scope="row" colspan="2" align="center"><button type="submit" class="btn btn-primary">Generar informe</button></th>
													</tr>
											</tbody>
										</table>
									</form>
								</div>
								<?php 
								if(isset($_GET['manual'])){
									if($_GET['manual']=='manual'){
									echo '<div class="row">
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
												<th scope="row" >Total de lechones nacidos</th>';
												 echo '<td>'.$_GET['total'].' nacidos </td>
											</tr>
											<tr>
												<th scope="row" >Promedio de lechones por parto</th>';
												echo '<td>'.round(($_GET['totalpartos']*100)/$_GET['total'],2).' cerdos/parto </td>
												
											</tr>
											<tr>
												<th scope="row" >Total de lechones macho nacidos</th>';
												echo '<td>'.($_GET['totalmachosnacidos']+$_GET['$totalmachosmuertos']).' machos </td>
											</tr>
											<tr>
												<th scope="row" >Porcentaje de lechones macho nacidos por parto</th>';
												echo '<td>'.round((($_GET['totalmachosnacidos']+($_GET['$totalmachosmuertos']))*100)/$_GET['total'],2).' %</td>
											</tr>
											<tr>
												<th scope="row" >Total de lechones hembra nacidos</th>';
												echo '<td>'.(($_GET['totalhembrasvivas'])+($_GET['totalhembrasmuertas'])).' hembras</td>
											</tr>
											<tr>
												<th scope="row" >Porcentaje de lechones hembra nacidas por parto</th>';
												echo '<td>'.round(((($_GET['totalhembrasvivas']+$_GET['totalhembrasmuertas'])*100)/$_GET['total']),2).' %</td>
											</tr>
											<th scope="row" >Peso promedio al nacer</th>';
												echo '<td>'.round($_GET['totalpromediocamada']/$_GET['total'],2).' kg</td>
											</tr>
											<tr>
												<th scope="row" >Total de lechones destetados</th>';
												echo '<td>'.$totalCerdosLactancia.'</td>
											</tr>
											<tr>
												<th scope="row" >Peso promedio de los lechones al ser destetados</th>';
												echo '<th>'.round($totalPesoCamadaLactancia/$totalCerdosLactancia,2) . ' Kg</td>
											</tr>
										</tbody>
									</table>';
									}
								}
								?>
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
					<canvas id="chart-area3" width="600" height="300"></canvas>
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
								labels : ["Machos Vivos","Machos Muertos","Hembras vivas","Hembras muertas"],
								datasets : [
									{
										fillColor : "#6b9dfa",
										strokeColor : "#ffffff",
										highlightFill: "#1864f2",
										highlightStroke: "#ffffff",
										data : ['<?php echo $totalMachosNacidos?>','<?php echo $totalMachosMuertos?>','<?php echo $totalHembrasVivas?>','<?php echo $totalHembrasMuertas?>']
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
	<?php include ('footer.view.php');?>