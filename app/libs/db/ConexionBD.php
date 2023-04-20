<?php
namespace Db;
use \PDO;
class ConexionBD {
    private $servername = "localhost";
    private $username = "root";
    private $password;
    private $dbname = "tienda";
    private $conn;

    function __construct() {
        $this->conectar();
    }

    function conectar() {
        try {
            $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Conexión establecida correctamente";
        } catch(PDOException $e) {
            echo "Error al conectar a la base de datos: " . $e->getMessage();
        }
        return $this->conn;
    }

    function cerrar() {
        $this->conn = null;
    }
}
?>
