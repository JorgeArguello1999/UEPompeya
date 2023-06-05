<?php
// Importamos las plantillas
require_once 'templates/plantillas.php';
$plantilla = new plantillas();

require_once 'database/database.php';
$db = new database();
$conn = $db->conn;

// Obtenemos los datos 
require_once 'vistas/m_articulos.php';
listar($conn);

// Obtenemos la cedula de la URL
$fechaActual = date("Y-m-d");
$desde = isset($_GET['desde']) ? $_GET['desde']:'2023-01-12';
$hasta = isset($_GET['hasta']) ? $_GET['hasta']:'{$fechaActual}';


$plantilla->encabezado();
// Plantilla pie de pagina 
$plantilla->pie_pagina();
?>
