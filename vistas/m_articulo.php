<?php
function ver($conn, $id){
    // consulta Sql
    $response = mysqli_query($conn, "
    select * from articulos
    inner join autor
    on autor.idautor = articulos.idautor
    where idarticulos={$id};
    ");

    foreach($response as $data){
        echo "
        <div class='articulo-content'>
            <div class='titulo'>
                <h2>{$data['Titulo']}</h2>
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