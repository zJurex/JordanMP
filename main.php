<?php
session_start();
$usuario = $_SESSION['usuario'] ?? null;
?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>JordanMP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="icon" href="img/logoA.png" type="image/x-icon">
  </head>
  <body id="top"class="p-3 m-0">
  
    <nav class="navbar navbar-expand-lg fixed-top" id="barraNavegacion">
      <div class="container-fluid position-relative d-flex justify-content-between align-items-center">
        <button
          class="btn btn-hamburuesa"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#menuLateral"
          aria-controls="menuLateral"
        >
        <span class="navbar-toggler-icon"></span>
        </button>


        

        <img src="logojordanazul.png" class="imagen-derecha">
        <a class="navbar-brand marca-centro" id="marcaCentro" href="#">JordanMP</a>
        </div>
      </div>
    </nav>


    <div
      class="offcanvas offcanvas-start offcanvas-izquierda"
      tabindex="-1"
      id="menuLateral"
      aria-labelledby="tituloMenu"
    >
      <div class="offcanvas-header">
        <div class="logo">
          <img
          src="logojordanazul.png"
          alt="Imagen"
          class="imagen-OP"
          />
          <h4 class="offcanvas-title" id="tituloMenu">JordanMP</h4>
        </div>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="offcanvas"
          aria-label="Cerrar"
        ></button>
      </div>
      <div class="offcanvas-body">
        <ul class="list-unstyled">
          <li><a class="dropdown-item" href="#top">Inicio</a></li>
          <li><a class="dropdown-item" href="#Hombres">Hombres</a></li>
          <li><a class="dropdown-item" href="#Mujeres">Mujeres</a></li>
          <li><a class="dropdown-item" href="#Niños">Niños</a></li>
        </ul>
      </div>
    </div>

 <div id="carruselEjemplo" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active fondo fondo-uno">
      <div class="capa-superior d-flex flex-column justify-content-center align-items-center text-center">
        <h1 class="display-4 fw-bold">Llegamos a MDP</h1>
        <p class="lead">Todo lo relacionado con Jordan en un solo lugar</p>
        <a class="btn btn-primary btn-lg mt-3" href="#sobreNosotros">Encontranos</a>
      </div>
    </div>
    <div class="carousel-item fondo fondo-dos">
      <div class="capa-superior d-flex flex-column justify-content-center align-items-center text-center">
        <h1 class="display-4 fw-bold">Nuestros mejores modelos</h1>
        <p class="lead">Lo mas solicitado</p>
        <a class="btn btn-primary btn-lg mt-3" href="#Destacados">Destacados</a>
      </div>
    </div>
    <div class="carousel-item fondo fondo-tres">
      <div class="capa-superior d-flex flex-column justify-content-center align-items-center text-center">
        <h1 class="display-4 fw-bold">Todo nuestro catalogo</h1>
        <p class="lead">Consegui lo que estabas buscando</p>
        <a class="btn btn-primary btn-lg mt-3" href="#Productos">Productos</a>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carruselEjemplo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carruselEjemplo" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Siguiente</span>
  </button>
</div>
</div>


<h5 class="productosdetacados" id="Destacados">Productos Destacados</h5>
  <div class="carousel-container">
    <div id="carouselJordan" class="carousel slide" data-bs-ride="carousel" data-bs-touch="false">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselJordan" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselJordan" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselJordan" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselJordan" data-bs-slide-to="3" aria-label="Slide 4"></button>
      </div>
      <div class="carousel-inner">
          <div class="offcanvas-header">
          </div>
        <div class="carousel-caption">
        </div>
        <div class="carousel-item active">
          <img src="https://static.nike.com/a/images/w_1280,q_auto,f_auto/pkl4ivk1pdhuoqmd6upp/air-jordan-12-retro-gamma-blue.jpg" alt="Jordan 12" />
        </div>
        <div class="carousel-item">
          <img src="https://static.nike.com/a/images/w_1280,q_auto,f_auto/01a2382d-fa11-4fe0-802a-b4f1758819f9/วันเปิดตัว-air-force-1-x-tiffany-co-1837-dz1382-001.jpg" alt="Air force 1 tiffany" />
        </div>
        <div class="carousel-item">
          <img src="https://content.deadstock.de/media/pages/uploads/2023/06/81fb5f2743-1736778157/air-max-95-black-tiffany-hv6062-001-dead-stock-01-2560x.webp" alt="Air max 95"/>
        </div>
        <div class="carousel-item">
          <img src="https://static.nike.com/a/images/w_1280,q_auto,f_auto/65337609-ccd6-411e-b940-090dd1d5bcc7/fecha-de-lanzamiento-de-la-colección-de-ropa-jordan-x-clot.jpg" alt="RemeraJordan">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselJordan" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselJordan" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>


<div class="panel-imagen">
  <img src="nike-air-jordan-4-university-blue-shoe-3d-model-316f958a7c (1).jpg" alt="Jordan 4 University Blue" />
  <div class="contenido">
    <h1>JORDAN 4</h1>
    <p>University blue</p>
    <button id="abrirMenu">COMPRAR</button>
  </div>
</div>

  <div class="fondo-modal" id="fondoModal">
    <div class="modal">
      <button class="cerrar" id="cerrarModal">✖</button>

      <div class="contenido-modal">
        <div class="galeria">
          <img src="descarga (3).jpg" alt="Producto" class="imagen-principal" />
          <div class="miniaturas">
            <img class="miniatura" src="Adobe Express - file.png" alt="img" />
            <img class="miniatura" src="descarga (2).jpg" alt="" />
            <img class="miniatura" src="descarga.jpg" alt="" />
          </div>
        </div>

        <div class="info-producto">
          <h2>Jordan4</h2>
          <p>University blue</p>
          <h3>$379.999</h3>

          <div class="talles">
            <button>39</button>
            <button>40</button>
            <button>41</button>
            <button>42</button>
            <button>43</button>
            <button>44</button>
          </div>

          <div class="botones">
            <a class="detalles" href="https://www.nike.com.ar/help/nota/guia-de-talles-calzado">Guia de talles</a>
            <button class="seleccionar">Seleccionar Talle</button>
          </div>
        </div>
      </div>
    </div>
  </div>


  <section id="Productos" class="seccion-cards">
    <h2 id="Hombres" class="titulo-seccion">Productos para Hombres</h2>
    <div class="contenedor-scroll">
      <div class="card-producto">
        <img src="https://nikeclprod.vtexassets.com/arquivos/ids/1293017-380-380?v=638804196271570000&width=380&height=380&aspect=true" alt="">
        <h3>Air Jordan Future Black Red</h3>
        <p>$199.999</p>
      </div>
      <div class="card-producto">
        <img src="https://nikeclprod.vtexassets.com/arquivos/ids/1179032-380-380?v=638676618534370000&width=380&height=380&aspect=true" alt="">
        <h3>Air Jordan 1 low</h3>
        <p>$183.999</p>
      </div>
      <div class="card-producto">
        <img src="https://static.nike.com/a/images/w_380,q_auto,f_auto/a4b97d0e-0065-4818-90f2-b0778ac48c6b/fecha-de-lanzamiento-de-los-air-jordan%C2%A04-white-cement-fv5029-100.jpg" alt="">
        <h3>Air Jordan 4 White Cement</h3>
        <p>$153.999</p>
      </div>
      <div class="card-producto">
        <img src="https://static.nike.com/a/images/w_380,q_auto,f_auto/6bea09e2-39d1-46c2-831b-ac3f82fcceae/fecha-de-lanzamiento-de-los-air-jordan%C2%A03-seoul-ib1482-100.jpg" alt="">
        <h3>Air Jordan 3 Seoul</h3>
        <p>$109.999</p>
      </div>
    </div>
    <h2 id="Mujeres" class="titulo-seccion">Productos para Mujeres</h2>
    <div class="contenedor-scroll">
      <div class="card-producto">
        <img src="https://static.nike.com/a/images/w_380,q_auto,f_auto/693f9b4d-95da-4df4-916e-f05c35c850d8/fecha-de-lanzamiento-de-los-air-jordan-1-high-og-unc-reimagined-dz5485-402.jpg" alt="">
        <h3>Air Jordan 1 High OG UNC Reimagined</h3>
        <p>$159.999</p>
      </div>
      <div class="card-producto">
        <img src="https://static.nike.com/a/images/w_380,q_auto,f_auto/b1818011-c410-4ae3-9045-5a71085e1506/fecha-de-lanzamiento-de-los-air-jordan%C2%A04-aluminum-para-mujer-hv0823-100.jpg" alt="">
        <h3>Air Jordan 4 Aluminum</h3>
        <p>$178.999</p>
      </div>
      <div class="card-producto">
        <img src="https://static.nike.com/a/images/w_380,q_auto,f_auto/084e1774-4749-49ce-afd9-9d6e78256679/fecha-de-lanzamiento-de-los-air-jordan-3-x-a-ma-maniére-for-the-love-hv8571-100.jpg" alt="">
        <h3>Air Jordan 3 For The Love</h3>
        <p>$169.999</p>
      </div>
      <div class="card-producto">
        <img src="https://static.nike.com/a/images/w_380,q_auto,f_auto/61af7d17-cb0d-4714-a014-ac3e4d21d22c/fecha-de-lanzamiento-de-los-air-max-95-pink-foam-para-mujer-hj5996-001.jpg" alt="">
        <h3>Air Max 95 Pink Foam</h3>
        <p>$109.999</p>
      </div>
    </div>
    <h2 id="Niños" class="titulo-seccion">Productos para Niños</h2>
    <div class="contenedor-scroll">
      <div class="card-producto">
        <img src="https://nikeclprod.vtexassets.com/arquivos/ids/1253140-380-380?v=638754208263800000&width=380&height=380&aspect=true" alt="">
        <h3>Air Jordan 1 High OG</h3>
        <p>$139.999</p>
      </div>
      <div class="card-producto">
        <img src="https://nikeclprod.vtexassets.com/arquivos/ids/1293393-380-380?v=638804200827700000&width=380&height=380&aspect=true" alt="">
        <h3>Nike Jr. Mercurial Superfly 10 Club "Kylian Mbappé"</h3>
        <p>$129.999</p>
      </div>
      <div class="card-producto">
        <img src="https://nikeclprod.vtexassets.com/arquivos/ids/1265968-380-380?v=638779950395970000&width=380&height=380&aspect=true" alt="">
        <h3>Air Jordan 1 Low OG Obsidian</h3>
        <p>$109.999</p>
      </div>
      <div class="card-producto">
        <img src="https://nikeclprod.vtexassets.com/arquivos/ids/1179042-380-380?v=638786774885400000&width=380&height=380&aspect=true" alt="">
        <h3>Air Jordan 1 Low "Game Royal"</h3>
        <p>$109.999</p>
      </div>
    </div> 


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
      let nav = document.querySelector("nav");
      let posicionAnterior = window.pageYOffset;

      window.addEventListener("scroll", function () {
        let posicionActual = window.pageYOffset;

        if (posicionAnterior > posicionActual || window.innerHeight + window.scrollY >= document.body.offsetHeight) {
          nav.classList.remove("ocultar");
          nav.classList.add("mostrar");
        } else {
          nav.classList.remove("mostrar");
          nav.classList.add("ocultar");
        }

        posicionAnterior = posicionActual;
      });

      const botonAbrir = document.getElementById("abrirMenu");
      const fondoModal = document.getElementById("fondoModal");
      const botonCerrar = document.getElementById("cerrarModal");

      botonAbrir.addEventListener("click", () => {
        fondoModal.style.display = "flex";
      });

      botonCerrar.addEventListener("click", () => {
        fondoModal.style.display = "none";
      });

      window.addEventListener("click", (e) => {
        if (e.target === fondoModal) {
          fondoModal.style.display = "none";
        }
      });

      const botonesTalle = document.querySelectorAll(".talles button");

      botonesTalle.forEach(boton => {
        boton.addEventListener("click", () => {
          botonesTalle.forEach(b => b.classList.remove("seleccionado"));
          boton.classList.add("seleccionado");
        });
      });

      const imagenPrincipal = document.querySelector('.imagen-principal');
      const miniaturas = document.querySelectorAll('.miniatura');

      miniaturas.forEach(miniatura => {
        miniatura.addEventListener('click', () => {
          const srcMiniatura = miniatura.src;
          const srcPrincipal = imagenPrincipal.src;

          imagenPrincipal.src = srcMiniatura;
          miniatura.src = srcPrincipal;
        });
      });
    </script>

  <script src="script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>

      <div class="container" id="sobreNosotros">
    <h1 class="title">Sobre Nosotros</h1>

    <div class="header">
      <img src="logoA.png" alt="Logo JordanMP" class="logo" />
      <div class="store-name">JordanMP</div>
    </div>

    <p class="description">
      Bienvenidos a <strong>JordanMP</strong>, tu tienda especializada en indumentaria urbana, deportiva y productos oficiales NBA.  
      Nuestro enfoque está en la moda, calidad y autenticidad. Contamos con una tienda física en Martínez, Buenos Aires.
    </p>

    <div class="content">
      <!-- Imagen de la tienda -->
      <div class="image-wrapper">
        <img src="fshop.png" alt="Foto de la tienda física" />
      </div>

      <!-- Mapa -->
      <div class="map-wrapper">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d207.14199655676!2d-58.53107265590821!3d-34.50690230377028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb10006219c11%3A0x1e5f956be823af8!2sNBA%20Store!5e1!3m2!1ses-419!2sar!4v1747496351024!5m2!1ses-419!2sar"
          allowfullscreen=""
          loading="lazy"
        ></iframe>

        <div class="map-button">
          <a href="https://www.google.com/maps/place/NBA+Store/@-34.5069023,-58.5310727,17z" target="_blank">
            Ver en mapa
          </a>
        </div>
      </div>
    </div>

    <!-- Información adicional -->
    <div class="extra-info">
      <h4>Atención personalizada</h4>
      <p>Nuestros asesores te ayudarán a encontrar el outfit ideal con estilo y comodidad.</p>

      <h4>Horarios</h4>
      <p>Lunes a Sábado de 10:00 a 20:00 hs</p>
    </div>

    <p class="tagline">"Vestí tu pasión con estilo auténtico."</p>
  </div>
</body>
<footer>
  <p><strong>JordanMP</strong> - Av. Panamericana 535, esquina Edison, Martínez, Provincia de Buenos Aires</p>
  <p>Email: contacto@jordanmp.com | WhatsApp: +54 9 11 1234-5678</p>
  <p>&copy; 2025 JordanMP. Todos los derechos reservados.</p>
</footer>
</html>
