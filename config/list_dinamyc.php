
<?php 
 $consulta = "SELECT * FROM product_raffle ORDER BY ID DESC LIMIT 5 ";

 $connectiond = new Connection();
 $db = $connectiond->getConnection();

 // Verificar si la conexión se estableció correctamente
 if (!$db) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
 }

 // Preparar la sentencia
 $stmt = mysqli_prepare($db, $consulta);

 // Vincular parámetros
 
 
 // Ejecutar la sentencia
 mysqli_stmt_execute($stmt);

 // Vincular resultados a variables
 mysqli_stmt_bind_result($stmt, $id, $tittle, $descripcion, $FechaL, $DG1, $DG2, $DG3, $DG4, $VALOR);
  