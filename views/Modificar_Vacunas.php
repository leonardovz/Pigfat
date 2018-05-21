<?php 
    include ('header.view.php'); ?>
<?php    
    require 'admin/admin.php';
    require 'php/config.php';
    $id = $_GET['id'];
    $conexion = conexion($Paginacion,$Usuario,$Password);
    $sentencia = $conexion->prepare("SELECT * FROM Vacunas WHERE idVacuna = $id");
    $sentencia->execute();
    $Variables = $sentencia->fetchAll();

    $principioActivo = $Variables[0][1] ;
    $enfermedadPreventiva = $Variables[0][2] ;
    $cantidadVacunas = $Variables[0][3] ;
    $observaciones = $Variables[0][4] ;
?>
<div class="container">
    <div class="row">
        <h1>Modificar Vacunas</h1>
        <form action="php/updateVacuna.php" method="POST" class="Formulario">
            <input name="id" type="hidden" value="<?php echo $id;?>">
            <div class="form-group">
                <label for="principioActivo">Principio Activo</label>
                <input class="form-control" type="text" id="idVenta" name="principioActivo" placeholder="principioActivo" value= "<?php echo $principioActivo;?>" required>
            </div>
            <div class="form-group">
                <label for="enfermedadPreventiva">Enfermedad Preventiva</label>
                <input class="form-control" type="text" id="enfermedadPreventiva" name="enfermedadPreventiva" placeholder="Enfermedad Preventiva" value= "<?php echo $enfermedadPreventiva;?>" required>
            </div>
            <div class="form-group">
                <label for="cantidadVacunas">Cantidad de Vacunas</label>
                <input class="form-control" type="text" name="cantidadVacunas" id="cantidadVacunas" value= "<?php echo $cantidadVacunas ;?>" required placeholder= "Ingresa una cantidad de Vacunas 1, 2, 3...">
            </div>
            <div class="form-group">
                <label for="cantidad">observaciones</label>
                <input class="form-control" type="text" name="observaciones" id="observaciones" value= "<?php echo $observaciones;?>" required placeholder="Ingresa Observaciones o anotaciones necesarias"s>
            </div>
            
            <button class="btn btn-success btn-block btn-lg" type="submit">Guardar Venta</button><br><br><br>
        </form>
    </div>
</div>
<?php include ('footer.view.php');?>
