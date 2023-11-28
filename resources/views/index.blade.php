@extends('layouts.app')
@section('container')
<link rel="stylesheet" href="./css/style.css">
<body>
    <header class="header">
        <div class="menu container">
            <a href="#" class="logo">PAPELERIA LAS 3D</a>
            <input type="checkbox" id="menu"/>
            <label for="menu">
                <img src="./img/concepto.png" class="menu-icono" alt="menu">
            </label>
        <div>
        <ul>
            <li class="submenu">
                <img src="./img/car.svg" id="img-carrito" alt="carrito">
                <div id="carrito">
                    <table id="lista-carrito">
                        <thead>
                            <tr>
                                <th>Imagen</th>
                                <th>Nombre</th>
                                <th>Precio</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                    <a href="#" id="vaciar-carrito" class="btn-2">Vaciar Carrito</a>
                </div>
            </li>
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
    <main class="products container" id="lista-1">
        <h2>Productos destacados</h2>
        <div class="product-content">
            <div class="product">
                <img src="./img/crayola4.png" alt="">
                <div class="product-txt">
                <h3>Producto</h3>
                <p class="precio">$40.00</p>
                <a href="#" class="agregar-carrito btn-2" data-id="1">Agregar</a>
            </div>
        </div>
        <div class="product">
            <img src="./img/crayola5.png" alt="">
            <div class="product-txt">
            <h3>Producto</h3>
            <p class="precio">$60.00</p>
            <a href="#" class="agregar-carrito btn-2" data-id="2">Agregar</a>
        </div>
    </div>
    <div class="product">
        <img src="./img/crayola7.png" alt="">
        <div class="product-txt">
        <h3>Producto</h3>
        <p class="precio">$50.00</p>
        <a href="#" class="agregar-carrito btn-2" data-id="3">Agregar</a>
    </div>
</div>
<div class="product">
    <img src="./img/crayola9.png" alt="">
    <div class="product-txt">
    <h3>Producto</h3>
    <p class="precio">$40.00</p>
    <a href="#" class="agregar-carrito btn-2" data-id="4">Agregar</a>
</div>
</div>
<div class="product">
    <img src="./img/dos.png" alt="">
    <div class="product-txt">
    <h3>Producto</h3>
    <p class="precio">$40.00</p>
    <a href="#" class="agregar-carrito btn-2" data-id="5">Agregar</a>
</div>
</div>
<div class="product">
    <img src="./img/marcadores5.png" alt="">
    <div class="product-txt">
    <h3>Producto</h3>
    <p class="precio">$40.00</p>
    <a href="#" class="agregar-carrito btn-2" data-id="6">Agregar</a>
</div>
</div>
<div class="product">
    <img src="./img/marcadores6.png" alt="">
    <div class="product-txt">
    <h3>Producto</h3>
    <p class="precio">$40.00</p>
    <a href="#" class="agregar-carrito btn-2" data-id="7">Agregar</a>
</div>
</div>
<div class="product">
    <img src="./img/marcadores8.png" alt="">
    <div class="product-txt">
    <h3>Producto</h3>
    <p class="precio">$100.00</p>
    <a href="#" class="agregar-carrito btn-2" data-id="8">Agregar</a>
</div>
</div>
    </div>

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