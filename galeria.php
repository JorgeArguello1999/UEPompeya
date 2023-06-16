<?php
// Importamos las plantillas
require_once 'templates/plantillas.php';
$plantilla = new plantillas();


$directorio = './imagenes/';

$plantilla->encabezado();

// Obtener la lista de archivos en el directorio
$archivos = scandir($directorio);

echo '
<main clas="container">
';

// Iterar sobre los archivos y mostrar las imágenes
foreach ($archivos as $archivo) {
    // Excluir los archivos "." y ".."
    if (
        $archivo != "." && $archivo != ".." && $archivo != "/"
    ) {
        // Generar el código HTML para mostrar la imagen
        echo '
        <a>
            <img src="' . $directorio . '/' . $archivo . '" 
            alt="' . $archivo . '" 
            class="materialboxed galery"
            data-title="' . $archivo. '"
            data-caption=" '. $archivo .' "
            >
        </a>
        ';
    }
}
echo '
</main>
';

$plantilla->pie_pagina();
?>