@extends('layouts.app')
@section('container')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAPELERIA LAS 3D</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <div class="menu container">
            <a href="#" class="logo">PAPELERIA LAS 3D</a>
            <input type="checkbox" id="menu"/>
            <label for="menu">
                <img src="./img/menu.png" class="menu-icono" alt="menu">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="index.html">INICIO</a></li>
                    <li><a href="Productos.html">SUGERENCIA PRODUCTOS</a></li>
                    <li><a href="#"></a></li>
                </ul>
            </nav>
        <div>
        <ul>
        </ul>
    </div>
</div>
<div class="header-content container">
    <div class="header-txt">
        <span>DE TODO PARA TODOS</span>
        <h1>Utiles Escolares</h1>
        <p>
            En nuestra papelería, 
            nuestra misión es proporcionar a nuestros clientes 
            productos de papelería de alta calidad.
        </p>
        <a href="https://www.google.com/maps?q=nombre+de+la+ubicación" class="btn-1" target="_blank">Información</a>
    </div>
    <div class="header-img">
        <img id="image-to-zoom" src="./img/logo.png" alt="">
    </div>    
</div>
    </header>
    <section class="information container">
        <div class="information-content">
            <div class="information-1">
                <img class="color-change" src="./img/i1.svg" alt="">
                <h3>lorem ipsum</h3>
                <p>
                    Mollitia reiciendis
                </p>
            </div>
    
            <div class="information-1">
                <img class="color-change" src="./img/i2.svg" alt="">
                <h3>lorem ipsum</h3>
                <p>
                    Mollitia reiciendis
                </p>
            </div>
    
             <div class="information-1">
                <img class="color-change" src="./img/i3.svg" alt="">
                <h3>lorem ipsum</h3>
                <p>
                    Mollitia reiciendis
                </p>
            </div>
        </div>
    </section>
    <section class="oferts container">
        <div class="ofert-1">
            <img src="./img/uno.png" alt="">
            <h3>Oferta</h3>
            <p>Premium</p>
        </div>
        <div class="ofert-1">
            <img src="./img/4.png" alt="">
            <h3>Oferta</h3>
            <p>Premium</p>
        </div>
        <div class="ofert-1">
            <img src="./img/cuatro.png" alt="">
            <h3>Oferta</h3>
            <p>Premium</p>
        </div>
        <div class="ofert-1">
            <img src="./img/5.png" alt="">
            <h3>Oferta</h3>
            <p>Premium</p>
        </div>
    </section>    
    </main>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Botones de Redes Sociales</title>
</head>
<body>
    <div class="container">
        <!-- Contenido de tu página -->
    </div>

    <div class="social">
        <a href="https://www.facebook.com" class="social-button">
            <img src="./img/facebook.png" alt="facebook">
        </a>
        <a href="https://www.whatsapp.com" class="social-button">
            <img src="./img/whats.png" alt="whatsapp">
        </a>
        <a href="https://www.instagram.com" class="social-button">
            <img src="./img/instragram.png" alt="instagram">
        </a>
    </div>
</body>
</html>

    <section class="contact container">
        <form>
            <input type="email" placeholder="Correo">
            <input type="submit" class="btn-3">
        </form>
    </section>
    <footer class="footer">
        <div class="footer-content container">
            <div class="link">
                <h3>Papeleria3D.com</h3>
                <ul>
                    <li><a href="#">¿Quienes somos?/a></li>
                    <li><a href="#">Ventas corporativas</a></li>
                    <li><a href="#">Ventas al mayoreo</a></li>
                    <li><a href="#">Linea etica</a></li>
                </ul>
            </div>
            <div class="link">
                <h3>Links de interés</h3>
                <ul>
                    <li><a href="#">Terminos y condiciones</a></li>
                    <li><a href="#">Aviso de privacidad</a></li>
                    <li><a href="#">Preguntas frecuentes</a></li>
                    <li><a href="#">Politica de devoluciones</a></li>
                </ul>
            </div>
            <div class="link">
                <h3>Atención al cliente</h3>
                <ul>
                    <li><a href="#">Oficinas</a></li>
                    <li><a href="#">Alfonso de alba #45</a></li>
                    <li><a href="#">Telefono</a></li>
                    <li><a href="#">4747376849</a></li>
                </ul>
            </div>
            
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="script.js"></script>

@endsection