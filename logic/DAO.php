<?php
class DAO
{
    private $conn;

    public function conectarBD()
    {
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $dbname = "bodegas";

        $this->conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

        if ($this->conn->connect_errno) {
            echo "Error de conexión: " . $this->conn->connect_error;
        }
    }

    public function desconectarBD()
    {
        $this->conn->close();
    }
}
