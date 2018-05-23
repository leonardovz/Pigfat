<div class="modal fade" id="ventana" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>

                <h4 class="modal-title">Modificar Usuario</h4>
            </div>
                <div class="modal-body">
                    <form action="perfil.php" method="POST" class="Formulario">
                        <input type="text" name="idCorral" id="idCorral" style= "display:none;" value="<?php echo $articulo[0]?>">
                        <div class="form-group">
                            <label for="usuario">Nombre de Usuario</label>
                            <input class="form-control" type="text" id="usuario" name="usuario" placeholder="Ingresa Usuario Unico" value="<?php echo $articulo[0]?>">
                        </div>
                        <div class="form-group">
                            <label for="pass">Contraseña</label>
                            <input class="form-control" type="password" id="pass" name="pass" placeholder="Registra una Contraseña">
                        </div>
                        <div class="form-group">
                            <label for="Rpass">Repetir Contraseña</label>
                            <input class="form-control" type="password" id="rpass" name="rpass" placeholder="Repite la Contraseña">
                        </div>
                        <div class="form-group">
                            <label for="tipoUser">Rango de El Usuario</label>
                            <select class="form-control" name="tipoUser" id="tipoUser">
                                <option value="Admin" >Admin</option>
                                <option value="Casetero" >Casetero</option>
                                <option value="Veterinario" >Veterinario</option>
                            </select>
                        </div>
                        <div class="panel-default">
                        <div class="alert alert-warning alert-dismisible">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <?php if(!empty($errores)): ?>
                            <div class="error">
                                <ul>
                                    <?php echo $errores; ?>
                                </ul>
                            </div>
                            <?php endif; ?>
                        </div>
                            
                        </div>
                        
                        <div class="form-group">
                        <button class="btn btn-success btn-block btn-lg" type="submit">Actualizar Usuario</button>
                        </div>
                    </form>
                </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Lorem</button>
                <button type="button" class="btn btn-success">Ipsum</button>
            </div>
        </div>
    </div>
</div>