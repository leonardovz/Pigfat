<?php include ('header.view.php');?>

<div class="container">
	<h1>Casetas </h1>
	<div class="row">
		<section class="articulos">
			<?php if ($pagina==1): ?>
				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="thumbnail">
						<a href="Casetas.php"><img class="" src='img/add.png' alt=""></a>
						<div class="caption">
							<h3>Registrar Caseta </h3>
						</div>
					</div>
				</div>
			<?php endif;?>

			<?php foreach ($articulos as $articulo): ?>
				<div class="col-xs-12 col-sm-6 col-md-3">
						<div class="thumbnail">
							<a href="#">
								<img src='img/1.jpg' alt="">
							</a>
							<div class="caption">
								<h3>N° Caseta: <small><?php echo $articulo[1] . " "?></small></h3>
								<h3><small>Estado de la Caseta:</small></h3>
								<p><small></small><?php echo $articulo[2] ?></p>
								<h4>Raza <small><?php echo "   "+ $articulo[3] ?></small></h3>
								<p>
									<a href="php/eliminarCaseta.php?<?php echo "idcorral=$articulo[0]"?>" class="btn btn-danger btn-block btn-lg">Eliminar</a>
									<a href="<?php echo "Mcasetas.php?idCorral=$articulo[0]&numCorral=$articulo[1]&estadoCorral=$articulo[2]&idRaza=$articulo[3]"; ?>" class="btn btn-primary btn-block btn-lg">Modificar</a>
								</p>
							</div>
						</div>
				</div>
			<?php endforeach; ?>
		</section>
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

<?php include ('footer.view.php');?>