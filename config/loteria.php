<?php

require_once '../classess/connection/connection.php';

if(isset($_POST['save'])){
    $loteria = $_POST['loteria'];
    $description = $_POST['description'];
    $date = $_POST['dateL'];
    $DG1 = isset($_POST['DG1']) ? $_POST['DG1'] : '';
    $DG2 = isset($_POST['DG2']) ? $_POST['DG2'] : '';
    $DG3 = isset($_POST['DG3']) ? $_POST['DG3'] : '';
    $DG4 = isset($_POST['DG4']) ? $_POST['DG4'] : '';
    $VALOR = isset($_POST['VALOR']) ? $_POST['VALOR'] : '';

    // Validar datos según tus requisitos

    // Crear la consulta SQL utilizando una sentencia preparada
    $qry = "INSERT INTO product_raffle (title, description, FechaL, DG1, DG2, DG3, DG4, VALOR) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    // establecer conexion 
    $connectiond = new Connection();
    $db = $connectiond->getConnection();


    // Verificar si la conexión se estableció correctamente
    if (!$db) {
        die("Error al conectar a la base de datos: " . mysqli_connect_error());
    }

     // Preparar la sentencia
     $stmt = mysqli_prepare($db, $qry);
    
     // Vincular parámetros
     mysqli_stmt_bind_param($stmt, "sssiiiis", $loteria, $description, $date, $DG1, $DG2, $DG3, $DG4, $VALOR);
     
     // Ejecutar la sentencia
    $res = mysqli_stmt_execute($stmt);
    
    // Verificar si la consulta fue exitosa
   
    if ($res) {
        echo "Registro insertado correctamente.";
    } else {
        echo "Error: " . mysqli_stmt_error($stmt);
    }
 

   
   
    // Cerrar la declaración y la conexión
    mysqli_stmt_close($stmt);
    $connectiond->closeConnection();
    
    header('Location: ../secciones/loteria.php');

 }

  












  





?>