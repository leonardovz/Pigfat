<?php include ('header.view.php');?>

    <div class="container">
        <h1>Control de Maternidad</h1>
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
									<a href="#" class="btn btn-primary">Modificar</a>
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
	<?php include ('footer.view.php');?>