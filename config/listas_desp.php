<?php

require_once "../classess/connection/connection.php";

$connectiond= new connection();
$db = $connectiond->getConnection();

$List_loterias = "SELECT * FROM loterias";
$resultado = mysqli_query($db,$List_loterias);


while ($lista = mysqli_fetch_array($resultado)){

    echo'<option value="'.$lista['LOTERIA'].'">'.$lista['LOTERIA'].'</option>';
    
    
}

mysqli_close($db);
//$connectiond->closeConnection();
