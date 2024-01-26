<?php
if (!empty($_POST["btningresar"])) {
    if (empty($_POST["username"]) || empty($_POST["password"])) {
        echo '<div>Los campos están vacíos</div>';
    } else {
        $usuario = $_POST["username"];
        $clave = $_POST["password"];

        // Incluye la clase de conexión
        require_once '../classess/connection/connection.php';

        $connectiond = new Connection();
        $db = $connectiond->getConnection();
        // Crea una instancia de la clase Connection

        if ($db) {
            // Escapa las variables y utiliza consultas preparadas para mayor seguridad
            $query = $db->prepare("SELECT * FROM users WHERE username = ? and password = ?");
            $query->bind_param("ss", $usuario, $clave);
            $query->execute();
            $result = $query->get_result();

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
              if (isset($row["id_roles"])){
                $id_roles = $row["id_roles"];
                // Las credenciales son correctas, redirige al usuario
                if  ($id_roles == 1){
                    header("location: ../secciones/loteria.php");
                } elseif($id_roles == 2){
                    header("location: ../secciones/index.php");
                } else {
                    print("rol desconocido");
                }
              } else {
                print (" la columna roles no esta definida en la base de datos");
              } 

            } else {
                echo "Credenciales incorrectas perro hpta";
            }



            // Cierra la consulta y la conexión
            $query->close();
            $connectiond->closeConnection();
        } else {
            echo "Error de conexión a la base de datos";
        }
    }
}
?>

