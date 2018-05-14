<?php include ('header.view.php');?>

<div class="container">
    <div class="row">
        <h1>Registro de Cacetas</h1>
        <form action="php/recibeCorral.php" method="POST" class="Formulario">
            <div class="form-group">
                <label for="numCorral">Numero de Corral</label>
                <input class="form-control" type="text" id="numCorral" name="numCorral" placeholder="Numero de Corral">
            </div>
            
            <div class="form-group">
                <label for="estadoCorral">Estado</label>
                <select class="form-control" name="estadoCorral" id="estadoCorral">
                    <option value="ENGORDA">ENGORDA</option>
                    <option value="VENTA" >VENTA</option>
                    <option value="VACIO">VACIO</option>
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
                        echo"<option value='$fila[0]'>$fila[0], $fila[1]</option>"; 
                    }
                ?>
                </select>
            </div>
            
            <button class="btn btn-success btn-block btn-lg" type="submit">Enviar</button><br><br><br>
        </form>
    </div>
</div>

<?php include ('footer.view.php');?>
