<?php session_start(); include ('header.view.php');?>

<!-- Inicia container principal -->
<div class="container">
    <h1>Datos de engorda</h1>
    <div class="container">
		<div class="row">
        <?php if($_SESSION['type']=='Admin' ):?>
            <h1>Vender camadas</h1>
            <form action="php/venderCamadas.php" method="POST" class="Formulario" id="vender">
                <div class="form-group">
					<label for="idParto">Id de la camada</label>
					<select name="idParto" id="idParto" class="form-control">
						<?php 
							$sqlEngorda="SELECT idParto FROM partos WHERE estado='engorda'";
							$queryEngorda = mysql_query($sqlEngorda) or die (mysql_error());
							while($fila = mysql_fetch_array($queryEngorda)){//despliegue de columnas y filas
								echo"<option value='$fila[0]'>$fila[0]</option>"; 
							}
						?>
					</select><br><br>
                    <button class="btn btn-success btn-block btn-lg" type="submit">Vender</button><br><br><br>
				</div>
            </form>
            <?php endif;?>
            <!-- Inicia bloque de estadisticas -->
            <div class="panel-group" id="informacion">
                <div class="panel panel-default">
                    <div class="panel-heading">Expresi&oacute;n de informaci&oacute;n</div>
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
										<th scope="row" id="totallechonesengorda">Total de lechones en engorda</th>
										<td><?php  echo ($totalMachosEngorda+$totalHembraEngorda)." ";?></td>
                                    </tr>
                                    <tr>
										<th scope="row" id="totalmachosengorda">Total de lechones macho en engorda</th>
										<td><?php  echo $totalMachosEngorda." ";?></td>
                                    </tr>
                                    <tr>
										<th scope="row" id="totalhembrasengorda">Total de lechones hembra en engorda</th>
										<td><?php  echo $totalHembraEngorda." ";?></td>
                                    </tr>
                                    <tr>
										<th scope="row" id="totallechonesventa">Total de lechones vendidos</th>
										<td><?php  echo ($totalMachosVenta+$totalHembraVenta)?></td>
                                    </tr>
                                    <tr>
										<th scope="row" id="totallechonesventa">Peso promedio de los lechones a la venta</th>
										<td><?php echo round($peso,2).' KG';?></td>
                                    </tr>
                                </tbody>
                            </table>
                    </div>
                </div>
                <div class="panel panel-default" id="graficas">
                    <div class="panel-heading">G&aacute;ficas</div>
                    <div class="panel-body">
                        <!-- Incicio grafica -->
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
                                                    labels : ["Machos en engorda","Hembras de engorda"],
                                                    datasets : [
                                                        {
                                                            fillColor : "#6b9dfa",
                                                            strokeColor : "#ffffff",
                                                            highlightFill: "#1864f2",
                                                            highlightStroke: "#ffffff",
                                                            data : ['<?php echo $totalMachosEngorda?>','<?php echo $totalHembraEngorda?>']
                                                        }
                                                    ]

                                                }
                                                    
                                            
                                            var ctx3 = document.getElementById("chart-area3").getContext("2d");
                                            
                                            window.myPie = new Chart(ctx3).Bar(barChartData, {responsive:true});
                                            
                            </script>
	                    </div>
                        <!-- Fin grafica -->
                    </div>
                </div>
            </div>
            <!-- Finaliza bloque de estadisticas -->
        </div>
    </div>



</div>
<!-- Fin container principal -->
<?php include ('footer.view.php');?>