<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="copyright" content="Konek">
    <meta name="title" content="konek">
    <meta name="description" content="Buscador de profesionales">
    <meta name="keywords" content="Plomeria,Electricista,Pintureria,idiomas">
    <link rel="stylesheet" href="sitiokonek.css">
    <link rel="stylesheet" href="animaciones/animate.css">
    <link rel="icon" type="image/x-icon" href="image/konekimage.png">

</head>

<body>
    <div class="wrapper">
        <div class="cabecera">
            <div class="logo">
                <a href="?p=home"><img src="image/ImageKonek.png" alt="KONEK"></a>
            </div>
            <div class="clima-content">
                <p id="clima"></p>

		<script src="clima.js"></script>

            </div>
            <nav>
                <a href="?p=formulario1" class="cabecera-link">Publicar Perfil</a>

                <a href="?p=formulario2" class="cabecera-link">Ingresar</a>
            </nav>
        </div>
        <div id="search-section" class="konek search-section">
            <form class="search-section_form" action="">
                <input type="text" name="busqueda" placeholder="Buscar en el sitio..." class="search-section_input" />
                <button>Buscar</button>
            </form>
        </div>
        <div class="contenido">
            <div class="listas">
                <h2>Categorias</h2>
                <ul class="categorias-ul">
                    <li class="categorias-li">
                        <a href="#" class="categorias-a">Plomería</a>
                    </li>
                    <li class="categorias-li">
                        <a href="#" class="categorias-a">Gasista</a>
                    </li>
                    <li class="categorias-li">
                        <a href="#" class="categorias-a">Electricista</a>
                    </li>
                    <li class="categorias-li">
                        <a href="#" class="categorias-a">Pinturería</a>
                    </li>
                    <li class="categorias-li">
                        <a href="#" class="categorias-a">Ama de casa</a>
                    </li>
                    <li class="categorias-li">
                        <a href="#" class="categorias-a">Profesor de música</a>
                    </li>
                    <li class="categorias-li">
                        <a href="#" class="categorias-a">Jardinería</a>
                    </li>
                    <li class="categorias-li">
                        <a href="#" class="categorias-a">Idiomas</a>
                    </li>
                </ul>

                <h2>Lugar</h2>
                <ul class="lugar-ul">
                    <li class="lugar-li">
                        <a href="#" class="lugar-a">Buenos Aires</a>
                    </li>
                    <li class="lugar-li">
                        <a href="#" class="lugar-a">Córdoba</a>
                    </li>
                    <li class="lugar-li">
                        <a href="#" class="lugar-a">Santa Fe</a>
                    </li>
                    <li class="lugar-li">
                        <a href="#" class="lugar-a">Mendoza</a>
                    </li>
                </ul>

                <h2>Disponiblidad</h2>
                <ul class="disponibilidad-ul">
                    <li class="disponibilidad-li">
                        <a href="#" class="disponibilidad-a">Full-time</a>
                    </li>
                    <li class="disponibilidad-li">
                        <a href="#" class="disponibilidad-a">Part-time</a>
                    </li>
                    <li class="disponibilidad-li">
                        <a href="#" class="disponibilidad-a">Mañana</a>
                    </li>
                    <li class="disponibilidad-li">
                        <a href="#" class="disponibilidad-a">Tarde</a>
                    </li>
                    <li class="disponibilidad-li">
                        <a href="#" class="disponibilidad-a">Noche</a>
                    </li>
                </ul>

                <h2>Rango de Precio</h2>
                <ul class="precio-ul">
                    <li class="precio-li">
                        <a href="#" class="precio-a">Menos de 1000</a>
                    </li>
                    <li class="precio-li">
                        <a href="#" class="precio-a">Entre 1000-2000</a>
                    </li>
                    <li class="precio-li">
                        <a href="#" class="precio-a">Entre 2000-3000</a>
                    </li>
                    <li class="precio-li">
                        <a href="#" class="precio-a">Entre 3000-4000</a>
                    </li>
                    <li class="precio-li">
                        <a href="#" class="precio-a">Más de 4000</a>
                    </li>
                </ul>

                <h2>Calificación Usuario</h2>
                <ul class="calificación-ul">
                    <li class="calificación-li">
                        <form>
                            <p class="clasificacion">
                              <input id="radio1" type="radio" name="estrellas" value="5"><!--
                              --><label for="radio1">★</label><!--
                              --><input id="radio2" type="radio" name="estrellas" value="4"><!--
                              --><label for="radio2">★</label><!--
                              --><input id="radio3" type="radio" name="estrellas" value="3"><!--
                              --><label for="radio3">★</label><!--
                              --><input id="radio4" type="radio" name="estrellas" value="2"><!--
                              --><label for="radio4">★</label><!--
                              --><input id="radio5" type="radio" name="estrellas" value="1"><!--
                              --><label for="radio5">★</label>
                            </p>
                          </form>

                    </li>
                </ul>
            </div>
<?php
if (!isset($_GET['p'])) {
	$_GET['p'] = 'home';
}
require_once $_GET['p'] . '.php';
?>
        </div>
    </div>
</body>

<br>


<footer>
<nav class="footer">
        <ul>
          <img src="image/argentina.png" alt="Argentina">
          <li><a href="#">Términos y Condiciones</a></li>
          <li><a href="#">Políticas de Privacidad</a></li>
          <li><a href="#">Condiciones de Publicación</a></li>
          <li><a href="#">Política de Gestión de la Calidad</a></li>
        </ul>
      </nav>
</footer>

</html>