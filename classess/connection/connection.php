<?php
class Connection 
{
    private $server;
    private $user;
    private $password;
    private $database;
    private $port;
    private $connection;

    public function __construct()
{
    $listData = $this->dataConnection();

    if (count($listData) > 0) {
        $data = $listData[0]; // Suponiendo que solo hay una configuración de conexión en el JSON
        $this->server = $data["server"];
        $this->user = $data["user"];
        $this->password = $data["password"];
        $this->database = $data["database"];
        $this->port = $data["port"];
        
        $this->connection = new mysqli($this->server, $this->user, $this->password, $this->database, $this->port);
        
        if ($this->connection->connect_error) {
            die("Error de conexión: " . $this->connection->connect_error);
        }
    } else {
        die("No se encontraron datos de conexión en el archivo config.json");
    }
}


 private function dataConnection()
 {
    $directory = dirname(__FILE__);
    $jsonData = file_get_contents($directory . '/' . 'config.json');

    $listData = json_decode($jsonData, true);

    if (is_array($listData) && count($listData) > 0) {
        return $listData;
    } else {
        die("Error: Datos de conexión no válidos en config.json");
    }
 }


    public function getConnection()
    {
        return $this->connection;
    }

    public function closeConnection()
    {
        if ($this->connection) {
            $this->connection->close();
        }
    }
}
?>