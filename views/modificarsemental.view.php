<?php include ('header.view.php');?>
<div class="container">
    <div class="row">
        <form action="php/modificarsemental.php" method="post">
            <div class="form-group">
                <label for="idCerdo">Id Cerdo</label>
                <input type="text" name="idCerdo" id="idCerdo" class="form-control" value="<?php echo $idCerdo?>" readonly="readonly">
            </div>
            <div class="form-group">
                <label for="fechaNacimiento">Fecha de nacimiento</label>
                <input type="date" name="fechaNacimiento" id="fechaNacimiento" class="form-control" value="<?php echo $fechaNacimiento?>">
            </div>
            <div class="form-group">
                <label for="idRaza">Id Raza</label>
                <input type="number" name="idRaza" id="idRaza" class="form-control" value="<?php echo $idRaza?>" readonly="readonly">
            </div>
            <div class="form-group">
                <label for="pesoNacimiento">Peso en su nacimiento</label>
                <input type="number" name="pesoNacimiento" id="pesoNacimiento" class="form-control" value="<?php echo $pesoNacimiento?>">
            </div>
            <div class="form-group">
                <label for="pesoDestete">Peso en su destete</label>
                <input type="number" name="pesoDestete" id="pesoDestete" class="form-control" value="<?php echo $pesoDestete?>">
            </div>
            <div class="form-group">
                <label for="razaPadre">Raza del padre</label>
                <input type="text" name="razaPadre" id="razaPadre" class="form-control" value="<?php echo $razaPadre?>" readonly="readonly">
            </div>
            <div class="form-group">
                <label for="razaMadre">Raza del madre</label>
                <input type="text" name="razaMadre" id="razaMadre" class="form-control" value="<?php echo $razaMadre?>" readonly="readonly">
            </div>
            <div class="form-group">
                <label for="numHermanosNacidos">N&uacute;mero de hermanos nacidos</label>
                <input type="text" name="numHermanosNacidos" id="numHermanosNacidos" class="form-control" value="<?php echo $numHermanosNacidos?>" readonly="readonly">
            </div>
            <div class="form-group">
                <label for="numHermanosDestete">N&uacute;mero de hermanos destetados</label>
                <input type="text" name="numHermanosDestete" id="numHermanosDestete" class="form-control" value="<?php echo $numHermanosDestete?>" readonly="readonly">
            </div>
            <button class="btn btn-success btn-block btn-lg" type="submit">Modificar</button><br><br><br>
        </form>
    </div>
</div>
<?php include ('footer.view.php');?>