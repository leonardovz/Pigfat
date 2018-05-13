<?php include ('header.view.php');?>

    <div class="container">
        <h1>Sementales</h1>
        <div class="row">
		<section class="articulos">
			<?php foreach ($articulos as $articulo): ?>
				<div class="col-xs-12 col-sm-6 col-md-3">
						<div class="thumbnail">
							<a href="#">
								<img src='img/2.jpg' alt="">
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
		</section><div class="row">
			<h2>Sementales</h2>
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