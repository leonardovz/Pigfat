<?php require 'header.view.php';?>

<div class="col-md-9">
    <nav class="navbar navbar-default">
        <div class="container">
            <!-- Header del Menu en dispositivos moviles -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar1">
                    <span class="sr-only">Alternar Menu</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            
                <!-- Brand / Nombre del sitio -->
                <a href="perfil.php" class="navbar-brand">Perfil</a>
            </div>
            
            <!-- Links del Menu -->
            <div class="collapse navbar-collapse" id="navbar1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Inicio</a></li>
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
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Registros <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="registros.php">Ingresar Registro</a></li>
                            <li><a href="mostrarRegistros.php">Ver Registros</a></li>
                            <!-- <li><a href="#">Primeras tres semanas</a></li>
                            <li><a href="#">Nacidos muertos</a></li> -->
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="panel-group" id="acordeon">
                <div class="panel panel-default">
                    <div class="panel-heading" id="heading1">
                        <h4 class="panel-title">
                            <a href="#colapsable1" data-toggle="collapse" data-parent="#acordeon">
                                Usuarios
                            </a>
                        </h4>
                    </div>

                    <div id="colapsable1" class="panel-collapse collapse in" arial-labelledby="heading1">
                        <div class="panel-body">
                            <table class="table table-hover table-condensed">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Cargo</th>
                                    </tr>
                                </thead>
                                <?php $i=0;foreach ($articulos as $articulo): ?>
                                <?php $i++;?>
                                <tr class="">
                                    <td class=""><?php echo $articulo[0];?></td>
                                    <td><?php echo $articulo[1];?></td>
                                    <td><?php echo $articulo[3];?></td>
                                    <td>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ventana<?php echo $articulo[0]?>">
                                        Modificar
                                    </button>

                                    <div class="modal fade" id="ventana<?php echo $articulo[0]?>" tabindex="-1">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">
                                                        <span>&times;</span>
                                                    </button>

                                                    <h4 class="modal-title">Modificar Datos de Usuarios</h4>
                                                </div>

                                                <div class="modal-body">
                                                    <p>
                                                        <form action="php/updateUser.php" method="POST" class="Formulario">
                                                            <input type="text" name="iduser" id="iduser" style= "display:none;" value="<?php echo $articulo[0]?>">
                                                            <div class="form-group">
                                                                <label for="usuario">Nombre de Usuario</label>
                                                                <input class="form-control" type="text" id="usuario" name="usuario" value="<?php echo $articulo[1]?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="pass">Contraseña</label>
                                                                <input class="form-control" type="password" id="pass" name="pass" value="<?php echo $articulo[2]?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="tipoUser">Rango de El Usuario</label>
                                                                <select class="form-control" name="tipoUser" id="tipoUser">
                                                                    <option value="Admin" <?php if($articulo[3]=='Admin')echo 'selected';?>>Admin</option>
                                                                    <option value="Casetero" <?php if($articulo[3]=='Casetero')echo 'selected';?>>Casetero</option>
                                                                    <option value="Veterinario" <?php if($articulo[3]=='Veterinario')echo 'selected';?>>Veterinario</option>
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
                                                    </p>
                                                </div>

                                                <div class="modal-footer">
                                                    <form action="php/eliminarUser.php" method="post">
                                                        <input name="idUser" type="hidden" value="<?php echo $articulo[0]?>">
                                                        <input class = "btn btn-danger"type="submit" value="Eliminar">
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        
                                    </td>
                                </tr>
                                <?php endforeach;?>

                            </table>
                        </div>
                    </div>						
                </div>
                
                <div class="panel panel-default">
                    <div class="panel-heading" id="heading2">
                        <h4 class="panel-title">
                            <a href="#colapsable2" data-toggle="collapse" data-parent="#acordeon">
                                Registro de Usuarios
                            </a>
                        </h4>
                    </div>

                    <div id="colapsable2" class="panel-collapse collapse" arial-labelledby="heading2">
                        <div class="panel-body">
                            <form action="perfil.php" method="POST" class="Formulario">
                                <input type="text" name="idCorral" id="idCorral" style= "display:none;" value="<?php echo $idCorral?>">
                                <div class="form-group">
                                    <label for="usuario">Nombre de Usuario</label>
                                    <input class="form-control" type="text" id="usuario" name="usuario" placeholder="Ingresa Usuario Unico">
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
                                <button class="btn btn-success btn-block btn-lg" type="submit">Añadir Usuario</button>
                                </div>
                            </form>
                        </div>
                    </div>						
                </div>

                <div class="panel panel-default">
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
                    </div>						
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-3">
    <h2>Perfil</h2>
    <div class="panel panel-primary">
        <div class="panel-heading">Administrador</div>
        <p class="panel-body">
            <div class="panel panel-default">
                <div class="panel-body">
                    <img class="center-block" src="img/admin.png" style = "width:100%;" alt="">
                </div>
            </div>
        </p>
    </div>
</div>



<?php require 'footer.view.php';?>