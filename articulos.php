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

$plantilla->encabezado();

/**
 * Filtro de busqueda
 * y visualización del contenido
 */
echo "
    <div class='search'>
        <form action='index.php' method='GET'>
            <label for='fecha_desde'>Fecha Desde:</label>
            <input type='date' name='desde' id='desde' required>
            
            <label for='fecha_hasta'>Fecha Hasta:</label>
            <input type='date' name='hasta' id='hasta' required>
                
            <input type='submit' class='btn btn-primary' value='Consultar'>
        </form>

        <form action='index.php' method='GET'>
            <input type='submit' class='btn btn-secondary' value='Todos'>
        </form>
    </div>
    
<div class='articulos'>
";
// Todos
if($filtro['desde'] == 0 && $filtro['id'] == 0){
    require_once 'vistas/m_articulos.php';
    listar($conn, NULL);
}
// filtro por fecha
if($filtro['desde'] != 0){
    require_once 'vistas/m_articulos.php';
    listar($conn, $filtro);
}
echo "</div>";

// filtro por id 
if($filtro['id'] != 0){
    require_once 'vistas/m_articulo.php';
    ver($conn, $filtro);
}


// Plantilla pie de pagina 
$plantilla->pie_pagina();
?>
