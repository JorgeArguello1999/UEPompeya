<?php

class vistas{

    private $conn;
    public $ruta;

    public function __construct(){
        include('database.php');
        $database = new database(); 
        $this->conn = $database->conn;
        $this->ruta = $database->ruta;
    }

    public function get_datos_personales_all(){
        $response = mysqli_query($this->conn, "
        select * from articulos
        inner join autor
        on autor.idautor = articulos.idautor;
        ");
        return $response->fetch_all(MYSQLI_ASSOC);
    }

}
?>
