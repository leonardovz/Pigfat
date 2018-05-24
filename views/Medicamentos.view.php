<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<h2>Acordeon</h2>

				<div class="panel-group" id="acordeon">
					<div class="panel panel-default">
						<div class="panel-heading" id="heading1">
							<h4 class="panel-title">
								<a href="#colapsable1" data-toggle="collapse" data-parent="#acordeon">
									Vista de Medicamentos
								</a>
							</h4>
						</div>

						<div id="colapsable1" class="panel-collapse collapse in" arial-labelledby="heading1">
							<div class="panel-body">
                            <div class="container-fluid">
                                    <h1>Control Medicamentos</h1>
                                    <div class="row">
                                        <table class="table table-hover table-condensed">
                                            <thead>
                                                <tr>
                                                    <th>N° Medicamento</th>
                                                    <th>Principio Activo</th>
                                                    <th>Medicamento</th>
                                                    <th>Laboratorio</th>
                                                    <th>Cantidad</th>
                                                    <th>Suministro por</th>
                                                </tr>
                                            </thead>
                                            <?php foreach($Medicamentos as $articulo):?>
                                            <tr>
                                                <td><?php echo $articulo['idMedicamento']?></td>
                                                <td><?php echo $articulo['principioActivo']?></td>
                                                <td><?php echo $articulo['nombreMedicamento']?></td>
                                                <td><?php echo $articulo['laboratorioProcedencia']?></td>
                                                <td><?php echo $articulo['cantidad']?></td>
                                                <td><?php echo $articulo['viaSuministro']?></td>
                                                <?php if(true):?>
                                                <td>                            
                                                    <form action="php/eliminarMedicamento.php" method="post">
                                                        <input name="id" type="hidden" value="<?php echo $articulo[0];?>">
                                                        <input class = "btn btn-danger" type="submit" value="Eliminar">
                                                    </form>
                                                </td>
                                                <td>
                                                    <a class = "btn btn-success" href=Mmedicamento.php?id=<?php echo $articulo['idMedicamento'];?> >Modificar</a>
                                                </td>
                                                <?php endif ?>
                                            </tr>
                                            <?php endforeach;?>
                                        </table>
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
							</div>
						</div>						
					</div>

					<div class="panel panel-default">
						<div class="panel-heading" id="heading2">
							<h4 class="panel-title">
								<a href="#colapsable2" data-toggle="collapse" data-parent="#acordeon">
									Registro de Medicamento
								</a>
							</h4>
						</div>

						<div id="colapsable2" class="panel-collapse collapse" arial-labelledby="heading2">
							<div class="panel-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <h1>Modificar Medicamentos</h1>
                                        <form action="php/recibeMedicamento.php" method="POST" class="Formulario">
                                            <input name="id" type="hidden">
                                            <div class="form-group">
                                                <label for="principioActivo">principioActivo</label>
                                                <input class="form-control" type="text" id="idVenta" name="principioActivo" placeholder="principioActivo"  required>
                                            </div>
                                            <div class="form-group">
                                                <label for="numCorral">Nombre Medicamento</label>
                                                <input class="form-control" type="text" id="nombreMedicamento" name="nombreMedicamento" placeholder="Nombre de el Medicamento"  required>
                                            </div>
                                            <div class="form-group">
                                                <label for="laboratorioProcedencia">Laboratorio De Procedencia</label>
                                                <input class="form-control" type="text" name="laboratorioProcedencia" id="laboratorioProcedencia" placeholder = "Ingresa el Nombre de quie Elabora el medicamento "required>
                                            </div>
                                            <div class="form-group">
                                                <label for="cantidad">Cantidad</label>
                                                <input class="form-control" type="text" name="cantidad" id="cantidad" placeholder = "Ingresa el numero de Medicamentos que tienes" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="viaSuministro">Via de Suministro</label>
                                                <select class="form-control" name="viaSuministro" id="viaSuministro">
                                                    <option value="ALIMENTO">ALIMENTO</option>
                                                    <option value="INYECCION">INYECCION</option>
                                                    <option value="ORAL">ORAL</option>
                                                    <option value="CUTANEA">CUTANEA</option>
                                                </select>
                                            </div>
                                            
                                            <button class="btn btn-success btn-block btn-lg" type="submit">Guardar</button><br><br><br>
                                        </form>
                                    </div>
                                </div>
							</div>
						</div>
					</div>

					<!-- <div class="panel panel-default">
						<div class="panel-heading" id="heading3">
							<h4 class="panel-title">
								<a href="#colapsable3" data-toggle="collapse" data-parent="#acordeon">
									Elemento #3
								</a>
							</h4>
						</div>

						<div id="colapsable3" class="panel-collapse collapse" arial-labelledby="heading3">
							<div class="panel-body">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</div>
						</div>						 -->
					</div>
				</div>
			</div>
		</div>
	</div>
