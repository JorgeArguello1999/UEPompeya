<?php
// Importamos las plantillas
require_once 'templates/plantillas.php';
$plantilla = new plantillas();


$directorio = './imagenes/';

$plantilla->encabezado();

// Obtener la lista de archivos en el directorio
$archivos = scandir($directorio);

echo '
<div clas="container" style="display: grid;grid-template-columns: 1fr 1fr 1fr 1fr;">
';

// Iterar sobre los archivos y mostrar las imágenes
foreach ($archivos as $archivo) {
    // Excluir los archivos "." y ".."
    if (
        $archivo != "." && $archivo != ".." && $archivo != "/"
    ) {
        // Generar el código HTML para mostrar la imagen
        echo '
            <img src="' . $directorio . '/' . $archivo . '" 
            alt="' . $archivo . '" 
            class="materialboxed galery"
            data-title="' . $archivo. '"
            data-caption=" '. $archivo .' "
            width="300px"
            >
        ';
    }
}
echo '
</div>
';

$plantilla->pie_pagina();
?>