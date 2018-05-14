<?php include ('header.view.php');?>
    
    <div class="container">
        <div class="row">
            <h2>Revisar Tablas</h2>
            <p><span> Dest. Ant. </span>= Destete Anterior <br>
                <span>A</span> = Abiertos<br>
                <span>VM</span> = Vivos Machos<br>
                <span>MM</span> = Muertos Machos<br>
                <span>MH</span> = Muertos Hembras<br>
                <span>N</span> = Nacidos<br>
                <span>PdC</span> = Promedio de Camada<br>
                
            </p>
            <br>
            <ul class="nav nav-tabs" role="tablist">
                <li class="active"><a href="#seccion1" data-toggle="tab">Partos</a></li>
                <li><a href="#seccion2" data-toggle="tab">Sementales</a></li>
                <li><a href="#seccion3" data-toggle="tab">Cerdas</a></li>
                <li><a href="#seccion4" data-toggle="tab">Cacetas</a></li>
            </ul>

            <!-- Contenido -->
            <div class="tab-content">
                <div class="tab-pane fade in active" id="seccion1">
                    <div class="container">
                        <div class="row">
                            <table class="table table-hover table-condensed">
                                <thead>
                                    <tr>
                                        <th>Parto</th>
                                        <th>Raza</th>
                                        <th>Macho</th>
                                        <th>Parto</th>
                                        <th>Dest. Ant.</th>
                                        <th>Preñez</th>
                                        <th>A</th>
                                        <th>Parto</th>
                                        <th>VM</th>
                                        <th>MM</th>
                                        <th>VH</th>
                                        <th>MH</th>
                                        <th>N</th>
                                        <th>PdC</th>
                                        <th>estado</th>
                                    </tr>
                                </thead>

                                <tr class="">
                                    <?php
                                        include "php/config.php";

                                        $sql="SELECT idParto, idRaza, idRazaMacho, numParto, fechaDesteteAnterior, fechaPrenez, diasAbiertos, fechaParto, nacidosVivosMachos, nacidosMuertosMachos, 
                                        nacidosVivosHembras, nacidosMuertosHembras, totalNacidos, pesoPromedioCamada, estado FROM partos";
                                        $query = mysql_query($sql) or die (mysql_error());
                                        while($fila = mysql_fetch_array($query)){//despliegue de columnas y filas
                                                echo"<tr>";
                                                echo"<td>$fila[0]</td>";
                                                    echo"<td>$fila[1]</td>";
                                                    echo"<td>$fila[2]</td>";
                                                    echo"<td>$fila[3]</td>";
                                                    echo"<td>$fila[4]</td>";
                                                    echo"<td>$fila[5]</td>";
                                                    echo"<td>$fila[6]</td>";
                                                    echo"<td>$fila[7]</td>";
                                                    echo"<td>$fila[8]</td>";
                                                    echo"<td>$fila[9]</td>";
                                                    echo"<td>$fila[10]</td>";
                                                    echo"<td>$fila[11]</td>";
                                                    echo"<td>$fila[12]</td>";
                                                    echo"<td>$fila[13]</td>";
                                                    echo"<td>$fila[14]</td>";
                                                echo"</tr>";
                                        }

                                    ?>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade " id="seccion2">
                    <table class="table table-hover table-condensed">
                        <thead>
                            <tr>
                                <th>idCerdo</th>
                                <th>fechaNacimiento</th>
                                <th>idRaza</th>
                                <th>pesoNacimiento</th>
                                <th>pesoDestete</th>
                                <th>razaPadre</th>
                                <th>razaMadre</th>
                                <th>numHermanosNacidos</th>
                                <th>numHermanosDestete</th>
                            </tr>
                        </thead>
                        <tr class="">
                                    <?php
                                        include "php/config.php";
                                        $sql="SELECT idCerdo, fechaNacimiento, idRaza, pesoNacimiento, pesoDestete, razaPadre, razaMadre, numHermanosNacidos, numHermanosDestete FROM sementales";
                                        $query = mysql_query($sql) or die (mysql_error());
                                        while($fila = mysql_fetch_array($query)){//despliegue de columnas y filas
                                                echo"<tr>";
                                                echo"<td>$fila[0]</td>";
                                                    echo"<td>$fila[1]</td>";
                                                    echo"<td>$fila[2]</td>";
                                                    echo"<td>$fila[3]</td>";
                                                    echo"<td>$fila[4]</td>";
                                                    echo"<td>$fila[5]</td>";
                                                    echo"<td>$fila[6]</td>";
                                                    echo"<td>$fila[7]</td>";
                                                    echo"<td>$fila[8]</td>";
                                                    echo"<td>$fila[9]</td>";
                                                echo"</tr>";
                                        }

                                    ?>
                                </tr>

                    </table>
                </div>
                <div class="tab-pane fade " id="seccion3">
                    <table class="table table-hover table-condensed">
                    <thead>
                            <tr>
                                <th>idCerda</th>
                                <th>fechaNacimiento</th>
                                <th>idRaza</th>
                                <th>numPartoso</th>
                                <th>estadoCerda</th>
                            </tr>
                        </thead>
                        <tr class="">
                                <?php
                                    include "php/config.php";

                                    $sql="SELECT idCerda, fechaNacimiento, idRaza, numPartos, estadoCerda FROM cerdas";
                                    
                                    $query = mysql_query($sql) or die (mysql_error());
                                    while($fila = mysql_fetch_array($query)){//despliegue de columnas y filas
                                            echo"<tr>";
                                            echo"<td>$fila[0]</td>";
                                                echo"<td>$fila[1]</td>";
                                                echo"<td>$fila[2]</td>";
                                                echo"<td>$fila[3]</td>";
                                                echo"<td>$fila[4]</td>";
                                            echo"</tr>";
                                    }

                                ?>
                            </tr>
                                        
                    </table>
                </div>
                <div class="tab-pane fade " id="seccion4">
                    <table class="table table-hover table-condensed">
                        <thead>
                            <tr>
                                <th>ID Corral</th>
                                <th>Numero de Corral</th>
                                <th>Estado</th>
                                <th>Raza</th>
                            </tr>
                        </thead>
                        <tr class="">
                                <?php
                                    include "php/config.php";
                                    $sql="SELECT idCorral, numCorral, estadoCorral, idRaza FROM corrales";
                                    $query = mysql_query($sql) or die (mysql_error());
                                    while($fila = mysql_fetch_array($query)){//despliegue de columnas y filas
                                            echo"<tr>";
                                                echo"<td>$fila[0]</td>";
                                                echo"<td>$fila[1]</td>";
                                                echo"<td>$fila[2]</td>";
                                                echo"<td>$fila[3]</td>";
                                            echo"</tr>";
                                    }

                                ?>
                            </tr>
                    </table>  
                </div>
            </div>
        </div>
    </div>
    <?php include ('footer.view.php');?>