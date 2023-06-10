<?php
function listar($conn, $filtro){
    // consulta Sql
    $query = "
        SELECT *
        FROM articulos
        INNER JOIN autor ON autor.idautor = articulos.idautor
    ";
    // Verificar si el filtro está vacío
    if (empty($filtro)) {
        // No se proporcionó filtro, se muestran todos los resultados
        $query .= ";";
    } else {
        // Se proporcionó filtro, se agregan las condiciones a la consulta
        $query .= " WHERE FechaCreacion >= '{$filtro['desde']}' AND FechaCreacion <= '{$filtro['hasta']}';";
    }
    $response = mysqli_query($conn, $query);

    foreach($response as $data){
        echo "
        <div class='articulo-content'>
            <div class='titulo'>
                <h2>
                    <a href='./?id={$data['idarticulos']}'>
                        {$data['Titulo']}
                    </a>
                </h2>
            </div>
            <div class='contenido'>
                <p>{$data['Contenido']}</p>
                <img src='{$data['ImagenPrincipal']}' alt='Imagen Principal del Articulo'>
            </div>
            <div class='pie-articulo'>
                <p>{$data['nombres']}</p>
                <p>{$data['FechaCreacion']}</p>
                <img src='{$data['foto']}'>
            </div>
        </div>
        ";
    }
}
?>