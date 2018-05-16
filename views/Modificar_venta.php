<?php include ('header.view.php'); ?>
<?php    
    require 'php/config.php';

    $idCorral = $_GET['idCorral'];
    $numCorral = $_GET['numCorral'];
    $estadoCorral = $_GET['estadoCorral'];
    $idRaza = $_GET['idRaza'];

?>
<div class="container">
    <div class="row">
        <h1>Registro de Venta</h1>
        <form action="php/recibeVenta.php" method="POST" class="Formulario">
            <div class="form-group">
                <label for="numCorral">id Venta</label>
                <input class="form-control" type="text" id="idVenta" name="idVenta" placeholder="Inserta un ID de Venta" required>
            </div>
            <div class="form-group">
                <label for="numCorral">Numero de Cerdos</label>
                <input class="form-control" type="text" id="numCerdos" name="numCerdos" placeholder="Numero de Cerdos a vender" required>
            </div>
            <div class="form-group">
                <label for="fechaVenta">Fecha de Venta</label>
                <input class="form-control" type="date" name="fechaVenta" id="fechaVenta" required>
            </div>
            <div class="form-group">
                <label for="idRaza">Kilogramos Totales</label>
                <input class="form-control" type="text" name="kgTotales" id="kgTotales" value= "400" required>
            </div>
            <div class="form-group">
                <label for="idRaza">Precio Por Kilogramo</label>
                <input class="form-control" type="text" name="precioKg" id="preciokg" placeholder = "Solo ingresa Numeros" required>
            </div>
            
            <button class="btn btn-success btn-block btn-lg" type="submit">Guardar Venta</button><br><br><br>
        </form>
    </div>
</div>
<?php include ('footer.view.php');?>
