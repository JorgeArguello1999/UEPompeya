<?php

class database{
    public $conn;
    public $ruta;

    public function __construct(){
        $dbpasswd = getenv('DBPASSWD');
        $this->conn =  mysqli_connect(
            "127.0.0.1", // IP base de datos
            "root",// usuario 
            "{$dbpasswd}",// contraseña
            "uepompeya" // tabla
        );
        mysqli_set_charset($this->conn, "utf8");

        if(!$this->conn){
            echo "Error", mysqli_connect_error();
        }

        // Ruta donde se almacenen las fotografias
        $this->ruta = "../imagenes/";
    }
}
?>
