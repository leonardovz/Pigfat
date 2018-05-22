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
								<li><a href="maternidad.php">Cerdas de Reproducción</a></li>
								<li><a href="#">Promedio de vida reproductiva</a></li>
								<li><a href="#">Primer servicio de Hembra</a></li>
								<li><a href="#">N&uacute;mero de partos por a&ntilde;o</a></li>
								<li><a href="#">N&uacute;mero de hembras por semental</a></li>
								<li><a href="#">Dias de gestación</a></li>
								<li><a href="#">Control de partos</a></li>
							</ul>
						</li>
						<li>
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Maternidad <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="maternidad.php">Cerdas de Reproducción</a></li>
								<li><a href="#">Promedio de vida reproductiva</a></li>
								<li><a href="#">Primer servicio de Hembra</a></li>
								<li><a href="#">N&uacute;mero de partos por a&ntilde;o</a></li>
								<li><a href="#">N&uacute;mero de hembras por semental</a></li>
								<li><a href="#">Dias de gestación</a></li>
								<li><a href="#">Control de partos</a></li>
							</ul>
						</li>
						<li>
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Sementales <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="Sementales.php">Cerdos Sementales</a></li>
								<li><a href="#">Promedio de vida Reproductiva</a></li>
								<li><a href="#">Primer servicio del macho</a></li>
								<li><a href="#">N&uacute;mero de hembras por semental</a></li>
								<li><a href="#">Promedio de lechones producidos por semental</a></li>
							</ul>
						</li>
						<li>
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Destete <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="Destete.php">Numero de Hembras por Semental</a></li>
								<li><a href="#">Promedio de lechones nacidos por parto</a></li>
								<li><a href="#">Total de lechones MACHO nacidos</a></li>
								<li><a href="#">Promedio de lechones MACHO nacidos por parto</a></li>
								<li><a href="#">Total de lechones HEMBRA nacidos</a></li>
								<li><a href="#">Promedio de lechones HEMBRA nacidos por parto</a></li>
								<li><a href="#">Peso promedio al nacer</a></li>
								<li><a href="#">Peso promedio de los lechones despues de 21 dias</a></li>
								<li><a href="#">Total de  lechones destetados</a></li>
								<li><a href="#">Peso promedio de los lechones al ser destetados</a></li>
							</ul>
						</li>
						<li>
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Ventas <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="Ventas.php">Cerdos</a></li>
								<li><a href="#">Dias desde el nacimiento a la venta</a></li>
								<li><a href="#">Peso promedio de los cerdos por venta</a></li>
								<li><a href="#">Total de cerdos vendidos</a></li>
								<li><a href="#">Promedio de cerdos que salen a la venta por camada</a></li>
							</ul>
						</li>
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
								<li><a href="#">Nacidos muertos</a></li>
								<li><a href="#">Muertes en los primeros tres dias </a></li>
								<li><a href="#">Primeras tres semanas</a></li>
								<li><a href="#">Muertes en desarollo y engorda</a></li>
								<li><a href="#">Muertes de hembras en lactancia</a></li>
								<li><a href="#">Muertes de hembras en gestaci&oacute;n</a></li>
							</ul>
						</li>
						<li>
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Registros <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="registros.php">Ingresar Registro</a></li>
								<li><a href="mostrarRegistros.php">Ver Registros</a></li>
								<!-- <li><a href="#">Primeras tres semanas</a></li>
								<li><a href="#">Nacidos muertos</a></li> -->
							</ul>
						</li>
						<li>
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Apareamiento <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="">Dias Abiertos</a></li>
								<li><a href="#">Calores</a></li>
								<li><a href="#">N&uacute;mero de hembras en reproducci&oacute;n</a></li>
								<li><a href="#">Hembras pre&ntilde;adas por a&ntilde;o</a></li>
								<li><a href="#">Hembras paridas por a&ntilde;o</a></li>
							</ul>
						</li>
						<li>
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Alimento <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="">Alimento Total</a></li>
								<li><a href="">Alimento suministrado</a></li>
								<li><a href="">Alimento consumido</a></li>
							</ul>
						</li>
					</ul>
					

					<!-- Formulario de Busqueda -->
					<form class="navbar-form navbar-right" action="" role="search">
						<div class="form-group">
							<div class="btn btn-default"><a href="cerrar.php">Cerrar Sesión</a></div>
						</div>
					</form>
				</div>
			</div>				
		</nav>
	</header>