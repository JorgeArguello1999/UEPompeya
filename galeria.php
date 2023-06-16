<?php
// Importamos las plantillas
require_once 'templates/plantillas.php';
$plantilla = new plantillas();


$directorio = './imagenes/';

$plantilla->encabezado();

// Obtener la lista de archivos en el directorio
$archivos = scandir($directorio);

echo '}
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
			<div class="row galery">
				<div class="col s12 m4 l3">
					<div class="material-placeholder">
                        <img src="' . $directorio . '/' . $archivo . '" 
                        alt="' . $archivo . '" 
                        data-title="' . $archivo. '"
                        class="responsive-img materialboxed"
                        data-caption=" '. $archivo .' "
                        >
					</div>
				</div>
		    </div>
        ';
    }
}
echo '
</main>
<script src="./templates/script.js"></script>
';

$plantilla->pie_pagina();
?>