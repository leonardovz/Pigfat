<?php 
    include ('header.view.php'); ?>
<?php    
    require 'admin/admin.php';
    require 'php/config.php';
    $id = $_GET['id'];
    $conexion = conexion($Paginacion,$Usuario,$Password);
    $sentencia = $conexion->prepare("SELECT * FROM Medicamentos WHERE idMedicamento = $id");
    $sentencia->execute();
    $Variables = $sentencia->fetchAll();
    
    $principioActivo = $Variables[0][1] ;
    $nombreMedicamento = $Variables[0][2] ;
    $laboratorioProcedencia = $Variables[0][3] ;
    $cantidad = $Variables[0][4] ;
    $viaSuministro = $Variables[0][5] ;
?>
<div class="container">
    <div class="row">
        <h1>Modificar Medicamentos</h1>
        <form action="php/updateMedicamento.php" method="POST" class="Formulario">
            <input name="id" type="hidden" value="<?php echo $id;?>">
            <div class="form-group">
                <label for="principioActivo">principioActivo</label>
                <input class="form-control" type="text" id="idVenta" name="principioActivo" placeholder="principioActivo" value= "<?php echo $principioActivo;?>" required>
            </div>
            <div class="form-group">
                <label for="numCorral">Nombre Medicamento</label>
                <input class="form-control" type="text" id="nombreMedicamento" name="nombreMedicamento" placeholder="Nombre de el Medicamento" value= "<?php echo $nombreMedicamento;?>" required>
            </div>
            <div class="form-group">
                <label for="laboratorioProcedencia">Laboratorio De Procedencia</label>
                <input class="form-control" type="text" name="laboratorioProcedencia" id="laboratorioProcedencia" value= "<?php echo $laboratorioProcedencia ;?>" required>
            </div>
            <div class="form-group">
                <label for="cantidad">Cantidad</label>
                <input class="form-control" type="text" name="cantidad" id="cantidad" value= "<?php echo $cantidad;?>" required>
            </div>
            <div class="form-group">
                <label for="viaSuministro">Via de Suministro</label>
                <select class="form-control" name="viaSuministro" id="viaSuministro">
                    <option value="ALIMENTO" <?php if ($viaSuministro=="ALIMENTO") echo ' Selected';?>>ALIMENTO</option>
                    <option value="INYECCION" <?php if ($viaSuministro=="INYECCION") echo ' Selected';?>>INYECCION</option>
                    <option value="ORAL" <?php if ($viaSuministro=="ORAL") echo ' Selected';?>>ORAL</option>
                    <option value="CUTANEA" <?php if ($viaSuministro=="CUTANEA") echo ' Selected';?>>CUTANEA</option>
                </select>
            </div>
            
            <button class="btn btn-success btn-block btn-lg" type="submit">Guardar Venta</button><br><br><br>
        </form>
    </div>
</div>
<?php include ('footer.view.php');?>
