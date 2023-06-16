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
        $foto = base64_encode($data['foto']);
        echo "
        <div class='articulo-content'>
            <div class='titulo'>
                <h2>
                    <a href='./articulos.php?id={$data['idarticulos']}'>
                        {$data['Titulo']}
                    </a>
                </h2>
            </div>
            <div class='contenido'>
                <p>{$data['Contenido']}</p>
                <img src='./imagenes/{$data['ImagenPrincipal']}' 
                    alt='Imagen Principal del Articulo
                '>
            </div>
            <div class='pie-articulo'>
                <p>{$data['nombres']}</p>
                <p>{$data['FechaCreacion']}</p>
                <img src='data:image/jpeg;base64,{$foto}' alt='Foto de: {$data['nombres']}' width='10px'>
            </div>
        </div>
        ";
    }
}
?>