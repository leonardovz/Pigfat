<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h2>Vacunas</h2>

            <div class="panel-group" id="acordeon">
                <div class="panel panel-default">
                    <div class="panel-heading" id="heading4">
                        <h4 class="panel-title">
                            <a href="#colapsable4" data-toggle="collapse" data-parent="#acordeon">
                                Revisar Vacunas
                            </a>
                        </h4>
                    </div>

                    <div id="colapsable4" class="panel-collapse collapse in" arial-labelledby="heading4">
                        <div class="panel-body">
                            <div class="container-fluid">
                                <h1>Control Vacunas</h1>
                                <div class="row">
                                    <table class="table table-hover table-condensed">
                                        <thead>
                                            <tr>
                                                <th># Vacuna</th>
                                                <th>Principio Activo</th>
                                                <th>Envfermedad Preventiva</th>
                                                <th>Cantidad de Vacunas</th>
                                                <th>Observaciones</th>
                                            </tr>
                                        </thead>
                                        <?php foreach($articulos as $articulo):?>
                                        <tr>
                                            <td><?php echo $articulo['idVacuna']?></td>
                                            <td><?php echo $articulo['principioActivo']?></td>
                                            <td><?php echo $articulo['enfermedadPreventiva']?></td>
                                            <td><?php echo $articulo['cantidadVacunas']?></td>
                                            <td><?php echo $articulo['observaciones']?></td>
                                            <?php if(true):?>
                                            <td>                            
                                                <form action="php/eliminarVacuna.php" method="post">
                                                    <input name="id" type="hidden" value="<?php echo $articulo[0];?>">
                                                    <input class = "btn btn-danger" type="submit" value="Eliminar">
                                                </form>
                                            </td>
                                            <td>
                                                <a class = "btn btn-success" href=Mvacunas.php?id=<?php echo $articulo['idVacuna'];?> >Modificar</a>
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
                    <div class="panel-heading" id="heading5">
                        <h4 class="panel-title">
                            <a href="#colapsable5" data-toggle="collapse" data-parent="#acordeon">
                                Insertar Elementos
                            </a>
                        </h4>
                    </div>

                    <div id="colapsable5" class="panel-collapse collapse" arial-labelledby="heading5">
                        <div class="panel-body">
                            <div class="container">
                                <div class="row">
                                    <h1>Modificar Vacunas</h1>
                                    <form action="php/recibeVacuna.php" method="POST" class="Formulario">
                                        <div class="form-group">
                                            <label for="principioActivo">Principio Activo</label>
                                            <input class="form-control" type="text" id="idVenta" name="principioActivo" placeholder="principioActivo"  required>
                                        </div>
                                        <div class="form-group">
                                            <label for="enfermedadPreventiva">Enfermedad Preventiva</label>
                                            <input class="form-control" type="text" id="enfermedadPreventiva" name="enfermedadPreventiva" placeholder="Enfermedad Preventiva"  required>
                                        </div>
                                        <div class="form-group">
                                            <label for="cantidadVacunas">Cantidad de Vacunas</label>
                                            <input class="form-control" type="text" name="cantidadVacunas" id="cantidadVacunas"  required placeholder= "Ingresa una cantidad de Vacunas 1, 2, 3...">
                                        </div>
                                        <div class="form-group">
                                            <label for="cantidad">observaciones</label>
                                            <input class="form-control" type="text" name="observaciones" id="observaciones"  required placeholder="Ingresa Observaciones o anotaciones necesarias"s>
                                        </div>
                                        
                                        <button class="btn btn-success btn-block btn-lg" type="submit">Guardar Venta</button><br><br><br>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>						
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading" id="heading6">
                        <h4 class="panel-title">
                            <a href="#colapsable6" data-toggle="collapse" data-parent="#acordeon">
                                Elemento #3
                            </a>
                        </h4>
                    </div>

                    <div id="colapsable6" class="panel-collapse collapse" arial-labelledby="heading6">
                        <div class="panel-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </div>
                    </div>						
                </div>
            </div>
        </div>
    </div>
</div>
