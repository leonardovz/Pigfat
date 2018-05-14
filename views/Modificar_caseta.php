<?php 
    include ('header.view.php'); ?>
<?php    
    require 'php/config.php';

    $idCorral = $_GET['idCorral'];
    $numCorral = $_GET['numCorral'];
    $estadoCorral = $_GET['estadoCorral'];
    $idRaza = $_GET['idRaza'];

?>
<div class="container">
    <div class="row">
        <h1>Registro de Cacetas</h1>
        <form action="php/Mcaseta.php" method="POST" class="Formulario">
            <div class="form-group">
                <label for="numCorral">Modificar Corral de Corral</label>
                <input class="form-control" type="text" id="numCorral" name="numCorral" placeholder="Numero de Corral" value = "<?php echo $numCorral; ?>">
            </div>
            
            <div class="form-group">
                <label for="estadoCorral">Estado</label>
                <select class="form-control" name="estadoCorral" id="estadoCorral">
                    <option value="ENGORDA" <?php if ($estadoCorral == 'ENGORDA') {echo 'SELECTED'; }?> >ENGORDA</option>
                    <option value="VENTA" <?php if ($estadoCorral == 'VENTA') {echo 'SELECTED'; }?> >VENTA</option>
                    <option value="VACIO" <?php if ($estadoCorral == 'vacio') {echo 'SELECTED'; }?>>VACIO</option>
                    </select>
            </div>
            <div class="form-group">
                <label for="idRaza">Raza</label>
                <select class="form-control" name="idRaza" id="idRaza">
                <?php
                include "php/config.php";
                $sql="SELECT idRaza, Nombre FROM raza";
                $query = mysql_query($sql) or die (mysql_error());
                while($fila = mysql_fetch_array($query)){//despliegue de columnas y filas
                        echo"<option value=\"$fila[0]\" ";
                        if ($fila[0]== $idRaza) {
                            echo 'SELECTED';
                        }
                        echo ">$fila[0], $fila[1]</option>"; 
                    }
                ?>
                </select>
            </div>
            
            <button class="btn btn-success btn-block btn-lg" type="submit">Modificar</button><br><br><br>
        </form>
    </div>
</div>

<?php include ('footer.view.php');?>
