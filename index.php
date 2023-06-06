<?php
// Obtenemos la cedula de la URL
$fechaActual = date("Y-m-d");
$filtro = array(
    "desde" => isset($_GET['desde']) ? $_GET['desde']:'0',
    "hasta" => isset($_GET['hasta']) ? $_GET['hasta']:'0',
    "id" => isset($_GET['id']) ? $_GET['id']:'0',
);

// Importamos las plantillas
require_once 'templates/plantillas.php';
$plantilla = new plantillas();

require_once 'database/database.php';
$db = new database();
$conn = $db->conn;

/**
 * Lo que hago aqui es que si los campos de filtro (desde) estan
 * vacios muestro todos los articulos, en caso contrario solo muestro 
 * los articulos que coinciden
 */

 // filtro por fecha
if($filtro['desde'] != 0){
    require_once 'vistas/m_articulo.php';
    ver($conn, $filtro);

}if($filtro['id'] !=0){
    require_once 'vistas/m_articulo.php';
    ver($conn, $filtro['id']);

}else{
    require_once 'vistas/m_articulos.php';
    listar($conn);
}


$plantilla->encabezado();
// Plantilla pie de pagina 
$plantilla->pie_pagina();
?>
