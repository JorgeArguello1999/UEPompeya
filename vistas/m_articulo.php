<?php
function ver($conn, $filtro){
    // consulta Sql
    $response = mysqli_query($conn, "
    select * from articulos
    inner join autor
    on autor.idautor = articulos.idautor
    where idarticulos={$filtro['id']};
    ");

    foreach($response as $data){
        $foto = base64_encode($data['foto']);
        echo "
        <div class='articulo-content'>
            <div class='titulo'>
                <h2>{$data['Titulo']}</h2>
            </div>
            <div class='contenido'>
                <p>{$data['Contenido']}</p>
                <img src='./imagenes/{$data['ImagenPrincipal']}' alt='Imagen Principal del Articulo'>
            </div>
            <div class='pie-articulo'>
                <p>{$data['nombres']}</p>
                <p>{$data['FechaCreacion']}</p>
                <img src='data:image/jpeg;base64,{$foto}'>
            </div>
        </div>
        ";
    }
}
?>