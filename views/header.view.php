<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, 
	initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="icon" href="img/Sitio/pig.ico">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/contenido.css">
    <title>Inicio</title>
</head>
<body>
<header>
		<nav class="navbar navbar-inverse navbar-static-top">
			<div class="container-fluid">
				<!-- Encabezado de nuestro Menu -->
				<div class="navbar-header">
					<a href="#" class="navbar-brand">PigFat</a>

					<!-- Boton hamburguesa, solo visible en dispositivos moviles -->
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#btn-colapsar">
						<span class="sr-only">Navegacion</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- Elementos del Menu -->
				<!-- Links y formulario -->
				<div class="collapse navbar-collapse" id="btn-colapsar">

					<!-- Links del Menu -->
					<ul class="nav navbar-nav">
						<li><a href="index.php">Inicio</a></li>
						<li>
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Engorda <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<?php if($_SESSION['type']=='Admin'):?>
								<li><a href="engorda.php#vender">Vender camadas</a></li>
								<?php endif;?>
								<li><a href="engorda.php#informacion">Total de lechones en engorda</a></li>
								<li><a href="engorda.php#graficas">Graficas</a></li>
							</ul>
						</li>
						<li>
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Maternidad <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="maternidad.php">Cerdas de Reproducción</a></li>
								<li><a href="maternidad.php">N&uacute;mero de partos por a&ntilde;o</a></li>
								<li><a href="maternidad.php">Dias de gestación</a></li>
							</ul>
						</li>
						<li>
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Sementales <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="Sementales.php">Cerdos Sementales</a></li>
								<li><a href="Sementales.php">Promedio de vida Reproductiva</a></li>
								<li><a href="Sementales.php">Primer servicio del macho</a></li>
								<li><a href="Sementales.php">N&uacute;mero de hembras por semental</a></li>
								<li><a href="Sementales.php">Promedio de lechones producidos por semental</a></li>
							</ul>
						</li>
						<li>
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Destete <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="Destete.php">Promedio de lechones nacidos por parto</a></li>
								<li><a href="Destete.php">Total de lechones MACHO nacidos</a></li>
								<li><a href="Destete.php">Promedio de lechones MACHO nacidos por parto</a></li>
								<li><a href="Destete.php">Total de lechones HEMBRA nacidos</a></li>
								<li><a href="Destete.php">Promedio de lechones HEMBRA nacidos por parto</a></li>
								<li><a href="Destete.php">Peso promedio al nacer</a></li>
								<li><a href="Destete.php">Peso promedio de los lechones despues de 21 dias</a></li>
								<li><a href="Destete.php">Total de  lechones destetados</a></li>
								<li><a href="Destete.php">Peso promedio de los lechones al ser destetados</a></li>
							</ul>
						</li>
						<?php if($_SESSION['type']=='Veterinario'||$_SESSION['type']=='Admin'): ?>
						<li>
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Medicamentos y vacunas <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<!-- <li><a href="Medicamentos_y_vacunas.php">Enfermos en etapa de crecimiento</a></li> -->
								<li><a href="Medicamentos_y_vacunas.php?id=1">Vacunas</a></li>
								<li><a href="Medicamentos_y_vacunas.php?id=2">Medicamentos</a></li>
							</ul>
						</li>
						
						<li>
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Datos Mortalidad <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="mortalidad.php">Muertes</a></li>
							</ul>
						</li>
						<?php endif?>
						<li>
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Apareamiento <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="apareamiento.php">Apareamiento</a></li>
								<li><a href="apareamiento.php">N&uacute;mero de hembras en reproducci&oacute;n</a></li>
								<li><a href="apareamiento.php">Hembras pre&ntilde;adas por a&ntilde;o</a></li>
								<li><a href="apareamiento.php">Hembras paridas por a&ntilde;o</a></li>
							</ul>
						</li>
						
					</ul>
					

					<!-- Formulario de Busqueda -->
					<form class="navbar-form navbar-right" action="" role="search">
						<div class="dropdown">
							<button type="button" class="btn label-default dropdown-toggle" id="dropdown1" data-toggle="dropdown">
								<span class = "glyphicon glyphicon-collapse-down"></span> <span class="caret"></span>
							</button>

							<ul class="dropdown-menu" aria-lebelledby="dropdown1">
								<?php session_start(); if($_SESSION['type']=='Admin'):?>
								<li class="dropdown-header">Usuario</li>
								<li><a href="perfil.php">Perfil</a></li>
								<li class="divider"></li>
								<?php endif;?>
								<li class="dropdown-header">Sesion</li>
								<li><a href="cerrar.php">Cerrar Sesión</a></li>
							</ul>
						</div>
					</form>
				</div>
			</div>				
		</nav>
	</header>