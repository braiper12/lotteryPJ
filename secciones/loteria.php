<?php
include_once('header.php');
include_once('navbar.php');
require_once('../classess/connection/connection.php');
require_once('../config/loteria.php');
?>

<h1><center>Registrar Lotería</center></h1>

<div class="row align-items-md-stretch">
   <div class="col-md-5">
      <div class="h-100 p-5 bg-info border rounded-3">
         <h3><center>Crear Lotería</center></h3>
         <form action="../config/loteria.php" method="post" name="formRL">
            <h4>Formulario de Registro</h4>
            <select name="loteria" id="loteria">
            <option value="0">Seleccion loteria</option>
            <--input class="controls" type="text" name="loteria" id="loteria" value="0" placeholder="Ingrese la lotería">
          <?php
            require_once('../classess/connection/connection.php');
            include_once('../config/listas_desp.php');
            ?> 
            </select>
            <input class="controls" type="text" name="description" id="description" placeholder="Nombre">
            <input class="controls" type="date" name="dateL" id="dateL" placeholder="Fecha lotería">

            <div class="col-md-5">
               <input class="controls" type="number" name="DG1" id="DG1" placeholder="DG 1">
               <input class="controls" type="number" name="DG2" id="DG2" placeholder="DG 2">
               <input class="controls" type="number" name="DG3" id="DG3" placeholder="DG 3">
               <input class="controls" type="number" name="DG4" id="DG4" placeholder="DG 4">
            </div>

            <input class="controls" type="text" name="VALOR" id="VALOR" placeholder="VALOR $" oninput="formatoMoneda(this)">
            <input class="botons" type="submit" value="Registrar" name="save" id="save">
         </form>
      </div>
   </div>

   <div class="col-md-7">
      <div class="h-100 p-5 bg-warning border rounded-3">
         <h3><center>Lista de Loterías</center></h3>
         <!-- Puedes agregar contenido aquí según sea necesario -->
      </div>
   </div>
</div>

<div class="col-md-8 col-md-offset-2">
   <table class="table table-bordered table-responsive" name="tabla" id="tabla">
      <thead>
         <tr>
            <th scope="col">ID</th>
            <th scope="col">TÍTULO</th>
            <th scope="col">DESCRIPCIÓN</th>
            <th scope="col">FECHA</th>
            <th scope="col">DG1</th>
            <th scope="col">DG2</th>
            <th scope="col">DG3</th>
            <th scope="col">DG4</th>
            <th scope="col">VALOR</th>
         </tr>
      </thead>
      <tbody>
         <?php
         require_once '../classess/connection/connection.php';
         require_once('../config/list_dinamyc.php');
         // Iterar sobre los resultados
         while (mysqli_stmt_fetch($stmt)) {
            echo '<tr>';
            echo '<td>' . $id . '</td>';
            echo '<td>' . $tittle . '</td>';
            echo '<td>' . $descripcion . '</td>';
            echo '<td>' . $FechaL . '</td>';
            echo '<td>' . $DG1 . '</td>';
            echo '<td>' . $DG2 . '</td>';
            echo '<td>' . $DG3 . '</td>';
            echo '<td>' . $DG4 . '</td>';
            echo '<td>' . $VALOR . '</td>';
            echo '</tr>';
         }
         mysqli_stmt_close($stmt);
         // Cerrar la conexión
         ?>
      </tbody>
   </table>
</div>

<script src="../assets/inicio/inicio.js"></script>
