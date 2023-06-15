<?php 
class plantillas{
    public function encabezado(){
        echo "
        <!DOCTYPE html>
        <html lang='es'>
        <head>
            <title>UE Pompeya</title>
            <meta charset='UTF-8'>
            <link rel='stylesheet' href='./templates/galeria.css'>

            <!-- CDN -->
            <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ' crossorigin='anonymous'>
            <script src='https://cdn.jsdelivr.net/npm/chart.js'></script>

            <!-- ICONOS -->
            <link rel='stylesheet' 
            href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
      
            <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css' integrity='Eha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e' crossorigin='anonymous'>
            <!--CSS-->
            <link rel='stylesheet' href='./templates/style_project.css'>
            <!--SLAIDER -->
                <link rel='stylesheet' 
                href='https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css'>
                <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
                <script src='https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js'></script>
            <title>📚 | UEpompeya</title>

        </head>
        </head>
        <body>   
        <div class='contenedor'>
        <!-- CABEZERA -->
        <header>
            <div class='banner'>
                <div class='banner__top'>
                    <div class='ed-container pompeya-centrar'>
                        <div class='ed-item m-70'>
                            <div class='top__logo'>
                                <a class='top__logo__a' href='index.html'>
                                    <img class='top__logo__a__img' src='imagenes/SelloPompeya.png'>
                                    <div class='top__logo__a__texto'>
                                        <p class='top__logo__a__texto__nombre'>Unidad Educativa Nuestra Señora de Pompeya</p>
                                        <p class='top__logo__a__texto__eslogan'>Pompeya, presente y futuro de la historia de Pastaza</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>
                    <div class='container__menu'>
                        <div class='menu'>
                            <nav>
                                <ul>
                                    <li><a href='index.html' id='selected'>Inicio</a></li>
                                    <li><a href='#'>Conozcanos</a>
                                        <ul>
                                            <li><a href='paginas/conozcanos/Msg_Autoridad.html'>Mensaje de la Autoridad</a></li>
                                            <li><a href='paginas/conozcanos/ReseñaHistorica.html'>Reseña Historia</a></li>
                                            <li><a href='paginas/conozcanos/Valores.html'>Mision-Vision-Ideario-Valores</a></li>
                                            <li><a href='paginas/conozcanos/Simbolos.html'>Símbolos</a></li>
                                        </ul>
                                    </li>
                                    <li><a href='#'>Académico</a>
                                        <ul>
                                            <li><a href='https://idukay.net/#/login' target='_blank'>Plataforma Idukay</a></li>
                                            <li><a href='paginas/academico/Bachillerato_Tecnico.html'>Bachillerato Técnico</a></li>
                                            <li><a href='paginas/academico/Comisiones_Tecnicas.html'>Comisiones Técnicas</a></li>
                                            <li><a href='paginas/academico/VídeosTutoriales.html'>Video Tutoriales</a></li>
                                        </ul>
                                    </li>
                                    <li><a href='#'>Apoyo</a>
                                        <ul>
                                            <li><a href='paginas/apoyo/Pastoral.html'>Pastoral</a></li>
                                            <li><a href='paginas/apoyo/GobiernoEstudiantil.html'>Gobierno Estudiantil</a></li>
                                            <li><a href='paginas/apoyo/ComiteCentralPPFF.html'>Comite Central de PPFF</a></li>
                                        </ul>
                                    </li>
                                    <li><a href='./galeria.php'>Galería</a></li>
                                    <li><a href='./articulos.php'>Articulos</a></li>
                                </ul>
                            </nav>
                        </div>
                </div>    
            </div>
        </header>
        <!-- FIN DEL BANNER -->

        ";
    }
    
    public function pie_pagina(){
        echo "
        <!-- FOOTER-->
        <footer class='footer'>
        <div class='footer-container'>
            <div class='footer-column'>
            <h4>Conozcanos</h4>
            <ul>
                <li><a href='paginas/conozcanos/Msg_Autoridad.html'>Mensaje de la Autoridad</a></li>
                <li><a href='paginas/conozcanos/ReseñaHistorica.html'>Reseña Historia</a></li>
                <li><a href='paginas/conozcanos/Valores.html'>Mision-Vision-Ideario-Valores</a></li>
                <li><a href='paginas/conozcanos/Simbolos.html'>Símbolos</a></li>
            </ul>
            </div>
            <div class='footer-column'>
            <h4>Académico</h4>
            <ul>
                <li><a href='https://idukay.net/#/login' target='_blank'>Plataforma Idukay</a></li>
                <li><a href='paginas/academico/Bachillerato_Tecnico.html'>Bachillerato Técnico</a></li>
                <li><a href='paginas/academico/Comisiones_Tecnicas.html'>Comisiones Técnicas</a></li>
                <li><a href='paginas/academico/VídeosTutoriales.html'>Video Tutoriales</a></li>
            </ul>
            </div>
            <div class='footer-column'>
            <h4>Apoyo</h4>
            <ul>
                <li><a href='paginas/apoyo/Pastoral.html'>Pastoral</a></li>
                <li><a href='paginas/apoyo/GobiernoEstudiantil.html'>Gobierno Estudiantil</a></li>
                <li><a href='paginas/apoyo/ComiteCentralPPFF.html'>Comité Central de PPFF</a></li>
            </ul>
            </div>
            <div class='footer-column'>
            <h4>Galería</h4>
            </div>
            <div class='footer-column'>
            <h4>Articulos</h4>
            </div>
            <div class='footer-column'>
            <img src='imagenes/sellopompeya.png' alt='Logo Institucional'>
            <div class='footer-social-icons'>
                <a href='https://www.facebook.com/uepompeya.pompeya' target='_blank'><i class='bi bi-facebook'></i></a>
                <a href='https://www.instagram.com/consejo_pompeya_2023/' target='_blank'><i class='bi bi-instagram'></i></a>
            </div>
            </div>
        </div>
        <div class='footer-bottom'>
            <p class='footer-text'>&copy; 2023 UEPOMPEYA. Todos los derechos reservados.</p>
        </div>
        </footer>
        <!--FIN DEL FOOTER-->

        <!-- SCRIPTS -->
        <script>
        $(document).ready(function(){
            $('.slider1').bxSlider({
            mode: 'fade',
            });
            $('.slider2').bxSlider({
            mode: 'fade',
            });
            $('.slider3').bxSlider({
            mode: 'fade',
            });
        });
        </script>

		<script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js'></script>
		<script src='./templates/script.js'></script>
        </body>
        </html>
        ";
    }

}
?>
