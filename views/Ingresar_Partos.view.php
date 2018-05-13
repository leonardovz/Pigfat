<?php include ('header.view.php');?>

    <div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Formularios de Registro</h2>
				<br>
				<ul class="nav nav-tabs" role="tablist">
					<li class="active"><a href="#seccion1" data-toggle="tab">Partos</a></li>
					<li><a href="#seccion2" data-toggle="tab">Cerdas</a></li>
					<li><a href="#seccion3" data-toggle="tab">Sementales</a></li>
					<li><a href="#seccion4" data-toggle="tab">Cacetas</a></li>
				</ul>

				<div class="Formulario-control-registros" id="margen600">
					<!-- Contenido -->
					<div class="tab-content">
						<div class="tab-pane fade in active" id="seccion1">
							<div class="container">
								<div class="row">
									<h1>Ingresar datos de Parto</h1>
									<form action="php/recibe.php" method="POST" class="Formulario">
										<div class="form-group">
											<label for="idParto">ID Parto</label>
											<input class="form-control" type="text" id="idParto" name="idParto" placeholder="ID_Parto">
										</div>
										<div class="form-group">
											<label for="idRaza">Raza</label>
											<select class="form-control" name="idRaza" id="idRaza">
												<option>1200001</option>
												<option>1200002</option>
												<option>1200003</option>
												<option>1200004</option>
												<option>1200005</option>
												</select>
										</div>
										<div class="form-group">
												<label for="idRazaMacho">Raza Macho</label>
												<select class="form-control" name="idRazaMacho" id="idRazaMacho">
													<option>1200001</option>
													<option>1200002</option>
													<option>1200003</option>
													<option>1200004</option>
													<option>1200005</option>
													</select>
											</div>
										<div class="form-group">
											<label for="numParto">Numero de Parto</label>
											<input class="form-control" type="text" id="numParto" name="numParto" placeholder="Numero de Parto">
										</div>
										<div class="form-group">
											<label for="fechaDesteteAnterior">Fecha Destete Anterior</label>
											<input class="form-control" type="date" id="fechaDesteteAnterior" name="fechaDesteteAnterior" placeholder="Fecha 	Destete Anterior">
										</div>
										<div class="form-group">
											<label for="fechaPrenez">Fecha de Preñes</label>
											<input class="form-control" type="date" id="fechaPrenez" name="fechaPrenez" placeholder="Fecha de Preñes">
										</div>
										<div class="form-group">
											<label for="diasAbiertos">Dias Abiertos</label>
											<input class="form-control" type="text" id="diasAbiertos" name="diasAbiertos" placeholder="Dias Abiertos">
										</div>
										<div class="form-group">
											<label for="fechaParto">Fecha de Parto</label>
											<input class="form-control" type="date" id="fechaParto" name="fechaParto" placeholder="Fecha de Parto">
										</div>
										<div class="form-group">
											<label for="nacidosVivosMachos">Nacidos Vivos Machos</label>
											<input class="form-control" type="number" id="nacidosVivosMachos" name="nacidosVivosMachos" placeholder="Nacidos Vivos Machos">
										</div>
										<div class="form-group">
											<label for="nacidosMuertosMachos">Nacidos Muertos Machos</label>
											<input class="form-control" type="number" id="nacidosMuertosMachos" name="nacidosMuertosMachos" placeholder="Nacidos Muertos Machos">
										</div>
										<div class="form-group">
											<label for="nacidosVivosHembras">Nacidos Vivos Hembras</label>
											<input class="form-control" type="number" id="nacidosVivosHembras" name="nacidosVivosHembras" placeholder="Nacidos Vivos Hembras">
										</div>
										<div class="form-group">
											<label for="nacidosMuertosHembras">Nacidos Muertos Hembras</label>
											<input class="form-control" type="number" id="nacidosMuertosHembras" name="nacidosMuertosHembras" placeholder="Nacidos Muertos Hembras">
										</div>
										<div class="form-group">
											<label for="totalnacidos">Total_Nacidos</label>
											<input class="form-control" type="number" id="totalnacidos" name="totalnacidos" placeholder="Total_Nacidos">
										</div>
										<div class="form-group">
											<label for="pesoPromedioCamada">Peso Promedio Camada</label>
											<input class="form-control" type="number" id="pesoPromedioCamada" name="pesoPromedioCamada" placeholder="Peso Promedio Camada">
										</div>
										<div class="form-group">
											<label for="estado">Estado</label>
											<select class="form-control" id="estado" name="estado">
												<option>VENTA</option>
												<option>CACETA</option>
												</select>
										</div>
					
										<button class="btn btn-success btn-block btn-lg" type="submit">Enviar</button><br><br><br>
									</form>
								</div>
							</div>
						</div>
						<div class="tab-pane fade " id="seccion2">
							<div class="container">
								<div class="row">
									<h1>Registro de Cerdas</h1>
									<form action="php/recibeCerdas.php" method="POST" class="Formulario">
										<div class="form-group">
											<label for="idCerda">ID Cerda</label>
											<input class="form-control" type="text" id="idCerda" name="idCerda" placeholder="ID Cerda">
										</div>
										<div class="form-group">
											<label for="fechaNacimiento">Fecha de Nacimiento</label>
											<input class="form-control" type="date" id="fechaNacimiento" name="fechaNacimiento" placeholder="Fecha de Nacimiento">
										</div>
										<div class="form-group">
											<label for="idRaza">Raza</label>
											<select class="form-control" name="idRaza" id="idRaza">
												<option>1200001</option>
												<option>1200002</option>
												<option>1200003</option>
												<option>1200004</option>
												<option>1200005</option>
												</select>
										</div>
										<div class="form-group">
											<label for="numPartos">Numero de Partos</label>
											<input class="form-control" type="text" id="numPartos" name="numPartos" placeholder="Numero de Partos">
										</div>
										<div class="form-group">
											<label for="estadoCerda">Estado</label>
											<select class="form-control" name="estadoCerda" id="estadoCerda">
												<option>PRODUCCION</option>
												<option>VENTA</option>
												</select>
										</div>
					
										<button class="btn btn-success btn-block btn-lg" type="submit">Enviar</button><br><br><br>
									</form>
								</div>
							</div>
						</div>
						<div class="tab-pane fade " id="seccion3">
							<div class="container">
								<div class="row">
									<h1>Registro de Sementales</h1>
									<form action="php/recibeSemental.php" method="POST" class="Formulario">
										<div class="form-group">
											<label for="idCerdo">ID Cerdo</label>
											<input class="form-control" type="text" id="idCerdo" name="idCerdo" placeholder="ID_Cerdo">
										</div>
										<div class="form-group">
											<label for="fechaNacimiento">Fecha de Nacimiento</label>
											<input class="form-control" type="date" id="fechaNacimiento" name="fechaNacimiento" placeholder="Fecha de Nacimiento">
										</div>

										<div class="form-group">
											<label for="idRaza">ID Raza</label>
											<select class="form-control" name="idRaza" id="idRaza">
												<option>1200001</option>
												<option>1200002</option>
												<option>1200003</option>
												<option>1200004</option>
												<option>1200005</option>
												</select>
										</div>
										<div class="form-group">
											<label for="pesoNacimiento">Peso de Nacimiento</label>
											<input class="form-control" type="text" id="pesoNacimiento" name="pesoNacimiento" placeholder="Peso de Nacimiento">
										</div>
										<div class="form-group">
											<label for="pesoDestete">Peso de Destete</label>
											<input class="form-control" type="text" id="pesoDestete" name="pesoDestete" placeholder="Peso de Destete">
										</div>
										<div class="form-group">
											<label for="razaPadre">Raza Padre</label>
											<select class="form-control" id="razaPadre" name="razaPadre">
												<option>LANDRACE</option>
												<option>DUROC-JERSEY</option>
												<option>PIETRAIN</option>
												<option>YORK</option>
											</select>
										</div>
										<div class="form-group">
											<label for="razaMadre">Raza Madre</label>
											<select class="form-control" id="razaMadre"  name="razaMadre">
												<option>LANDRACE</option>
												<option>DUROC-JERSEY</option>
												<option>PIETRAIN</option>
												<option>YORK</option>
											</select>
										</div>
										<div class="form-group">
											<label for="numHermanosNacidos">Numero de Hermanos Nacidos</label>
											<input class="form-control" type="number" id="numHermanosNacidos" name="numHermanosNacidos" placeholder="Numero de Hermanos Nacidos">
										</div>
										<div class="form-group">
											<label for="numHermanosDestete">Numero de Hermanos Destete</label>
											<input class="form-control" type="number" id="numHermanosDestete" name="numHermanosDestete" placeholder="Numero de Hermanos Destete">
										</div>
										<button class="btn btn-success btn-block btn-lg" type="submit">Enviar</button><br><br><br>
									</form>
								</div>
							</div>
						</div>
						<div class="tab-pane fade " id="seccion4">
							<div class="container">
								<div class="row">
									<h1>Registro de Cacetas</h1>
									<form action="php/recibeCorral.php" method="POST" class="Formulario">
										<div class="form-group">
											<label for="idCorral">ID Corral</label>
											<input class="form-control" type="text" id="idCorral" name="idCorral" placeholder="ID Corral">
										</div>
										<div class="form-group">
											<label for="numCorral">Numero de Corral</label>
											<input class="form-control" type="text" id="numCorral" name="numCorral" placeholder="Numero de Corral">
										</div>
										
										<div class="form-group">
											<label for="estadoCorral">Estado</label>
											<select class="form-control" name="estadoCorral" id="estadoCorral">
												<option>ENGORDA</option>
												<option>VENTA</option>
												</select>
										</div>
										
										<button class="btn btn-success btn-block btn-lg" type="submit">Enviar</button><br><br><br>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div><!-- Final del formulario-->
			
				</div>
			</div>
		</div>
    </div>
	<?php include ('footer.view.php');?>