<?php 
class plantillas{
    public function encabezado(){
        echo "
        <!DOCTYPE html>
        <html lang='es'>
        <head>
            <title>UE Pompeya</title>
            <meta charset='UTF-8'>
            <link rel='stylesheet' href='./templates/style.css'>
            <link rel='stylesheet' href='./templates/galeria.css'>
		    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css'>

            <!-- CDN -->
            <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ' crossorigin='anonymous'>
            <script src='https://cdn.jsdelivr.net/npm/chart.js'></script>
        </head>
        <body>   
        ";
    }
    
    public function pie_pagina(){
        echo "
		<script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js'></script>
		<script src='./templates/script.js'></script>
        </body>
        </html>
        ";
    }

}
?>
