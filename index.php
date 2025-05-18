<?php
session_start();
$usuario = $_SESSION['usuario'] ?? null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JordanMP</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>
  <?php if ($usuario): ?>
  <div style="position: fixed; top: 10px; right: 20px; color: white; background-color: #333; padding: 8px 16px; border-radius: 8px; display: flex; align-items: center; gap: 10px;">
      Bienvenido, <strong><?php echo htmlspecialchars($usuario); ?></strong>
      <form method="post" action="logout.php" style="margin: 0;">
          <button type="submit" style="background-color: #37b1e2; color: black; border: none; padding: 6px 12px; border-radius: 6px; cursor: pointer;">Cerrar sesión</button>
      </form>
  </div>
  <?php endif; ?>

    <div class="container">
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
