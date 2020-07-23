<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vistas/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital@1&family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <title>Mis Series HD</title>
    <script src="vistas/js/main.js"></script>
</head>
<body>
    <div class="titulo">
        <h1>Mis seriesHD</h1>
    </div>
    <nav class="barra">
        <a href="">Wallpapers</a>
        <a href="">Música</a>
        <a href="">Series</a>
        <a href="">Contacto</a>
    </nav>
    <div class="contenido">
        <section class="wallpapers">
            <h2>Wallpapers</h2>           
            <a href="img/w1.jpg" target="_blank"><img src="img/w1.jpg"  alt=""></a>
            <a href="img/w2.jpg" target="_blank"> <img src="img/w2.jpg" alt=""></a>
            <a href="img/w3.jpg" target="_blank"> <img src="img/w3.jpg" alt=""></a>
            <a href="img/w4.jpg"target="_blank"> <img src="img/w4.jpg" alt=""></a>
            <a href="img/w5.jpg" target="_blank"><img src="img/w5.jpg" alt=""> </a>
            <a href="img/w6.jpg" target="_blank"><img src="img/w6.jpg" alt=""></a>
        </section>
        
    </div>
    <section class="trailers">
        <h2>Trailers</h2>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/O_T1C2vnfwE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen;>
        </iframe>
    </section>
    <section class="series">
        <h2>Eligé a tu Pokemón</h2>
        <input type="number" id="num" placeholder="INGRESA UN NÚMERO">
        <button onclick="Pokemon();">Buscar</button>
        <div id="elem"></div>
    </section>
</body>
</html>