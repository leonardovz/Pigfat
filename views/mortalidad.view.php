<?php include ('header.view.php');?>
	
    <div class="contenedor">
		<h1>Control de Muertes</h1>
		<div class="row">
			<script src="js/Chart.js"></script>
				<div id="canvas-holder">
				<!-- <canvas id="chart-area" width="300" height="300"></canvas> -->
				<!-- <canvas id="chart-area2" width="300" height="300"></canvas> -->
				<canvas id="chart-area3" width="600" height="300"></canvas>
				<!-- <canvas id="chart-area4" width="600" height="300"></canvas> -->
				</div>
				<script>
				var pieData = [{value: 40,color:"#0b82e7",highlight: "#0c62ab",label: "Google Chrome"},
								{
									value: 25,
									color: "#e3e860",
									highlight: "#a9ad47",
									label: "Android"
								},
								{
									value: 25,
									color: "#eb5d82",
									highlight: "#b74865",
									label: "Firefox"
								},
								{
									value: 25,
									color: "#5ae85a",
									highlight: "#42a642",
									label: "Internet Explorer"
								},
								{
									value: 50,
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

        <div class="row">
		<section class="articulos">
			<?php foreach ($articulos as $articulo): ?>
				<div class="col-xs-12 col-sm-6 col-md-3">
						<div class="thumbnail">
							<a href="#">
								<img src='img/3.jpg' alt="">
							</a>
							<div class="caption">
								<h3><?php echo $articulo['ID'] . " "?>Landrace</h3>
								<p><?php echo $articulo['Descripcion'] ?></p>
								<p>
									<a href="#" class="btn btn-primary">Comprar</a>
									<a href="#" class="btn btn-default">Detalles</a>
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
	
	<?php include ('footer.view.php');?>