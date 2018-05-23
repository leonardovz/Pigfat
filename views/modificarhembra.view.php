<?php include ('header.view.php');?>
<div class="container">
    <div class="row">
        <form action="php/modificarhembra.php" method="post">
            <div class="form-group">
                <label for="idCerda">Id Cerda</label>
                <input type="text" name="idCerda" id="idCerda" class="form-control" value="<?php echo $idCerda?>" readonly="readonly">
            </div>
            <div class="form-group">
                <label for="fechaNacimiento">Fecha de nacimiento</label>
                <input type="date" name="fechaNacimiento" id="fechaNacimiento" class="form-control" value="<?php echo $fechaNacimiento?>">
            </div>
            <div class="form-group">
                <label for="idCerda">Id Raza</label>
                <input type="number" name="idRaza" id="idRaza" class="form-control" value="<?php echo $idRaza?>" readonly="readonly">
            </div>
            <div class="form-group">
                <label for="numPartos">N&uacute;mero de partos</label>
                <input type="number" name="numPartos" id="numPartos" class="form-control" value="<?php echo $numPartos?>">
            </div>
            <div class="form-group">
                <label for="estadoCerda">Estado de la cerda</label>
                <input type="text" name="estadoCerda" id="estadoCerda" class="form-control" value="<?php echo $estadoCerda?>" readonly="readonly">
            </div>
            <div class="form-group">
                <label for="tipoCerda">Estado de la cerda</label>
                
                    <?php
                        if($idPArto == 200000){
                            echo '  <select name="tipoCerda" id="tipoCerda" class="form-control">
                                        <option value="200000">Cerda externa</option>
                                    </select>';
                        }else{
                            echo '  <select name="tipoCerda" id="tipoCerda" class="form-control">
                                        <option value="'.$idPArto.'">Cerda interna</option>
                                        <option value="200000">Cerda externa</option>
                                    </select>';
                        }
                    ?>
                
            </div>
            <button class="btn btn-success btn-block btn-lg" type="submit">Modificar</button><br><br><br>
        </form>
    </div>
</div>
<?php include ('footer.view.php');?>
