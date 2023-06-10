<?php
// Obtenemos la cedula de la URL
$fechaActual = date("Y-m-d");
$filtro = array(
    "desde" => isset($_GET['desde']) ? $_GET['desde']:'0',
    "hasta" => isset($_GET['hasta']) ? $_GET['hasta']:$fechaActual,
    "id" => isset($_GET['id']) ? $_GET['id']:'0',
);

// Importamos las plantillas
require_once 'templates/plantillas.php';
$plantilla = new plantillas();

require_once 'database/database.php';
$db = new database();
$conn = $db->conn;

// filtro por fecha
if($filtro['desde'] != 0){
    require_once 'vistas/m_articulos.php';
    listar($conn, $filtro);
}

// filtro por id 
if($filtro['id'] != 0){
    require_once 'vistas/m_articulo.php';
    ver($conn, $filtro);
}

// Todos
if($filtro['desde'] == 0 && $filtro['id'] == 0){
    require_once 'vistas/m_articulos.php';
    listar($conn, NULL);
}


$plantilla->encabezado();
// Plantilla pie de pagina 
$plantilla->pie_pagina();
?>
