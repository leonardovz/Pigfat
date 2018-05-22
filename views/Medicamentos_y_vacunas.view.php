<?php include ('header.view.php');?>

   <div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<h2>Informacion Medica</h2>

				<!-- Tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li class="<?php if($_GET['id']!='2') echo "active"; ?>"><a href="#seccion1" data-toggle="tab">Vacunas</a></li>
					<li class="<?php if($_GET['id']=='2') echo "active"; ?>"><a href="#seccion2" data-toggle="tab">Medicamentos</a></li>
				</ul>

				<!-- Contenido -->
				<div class="tab-content">
					<div class="tab-pane fade <?php if($_GET['id']!='2') echo "in active"; ?>" id="seccion1">
						<?php require 'views/Vacunas.view.php' ?>
					</div>
					<div class="tab-pane fade  <?php if($_GET['id']=='2') echo "in active"; ?>" id="seccion2">
                    	<?php require 'views/Medicamentos.view.php' ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include ('footer.view.php');?>