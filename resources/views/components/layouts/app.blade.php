<!DOCTYPE html>
<html lang="es">
<head>
  <!-- Metadatos -->
  <meta charset="uft-8">
  <meta name="author" content="Jose Murillo - josemprog">
  <meta name="description" content="En este sitio encontrarás lo mejor del baloncesto de Medellín, videos de las mejores jugadas, partidos, torneos, fotos, noticias y todo lo relacionado con el baloncesto de la Ciudad.">
  <meta name="keywords" content="Baloncesto, Baloncesto de medellín, Ball City, ballcitymedellin, Ball Medellín, City Medellín, Baloncesto Paisa, Baloncesto Colombiano">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- título -->
  <title>Ball City | Medellín</title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="/img/icono-ball-city.ico" type="image/x-icon">
  <!-- assets de css y javascript para VITE -->
  @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body>

<x-partials.navigation/>
  
{{ $slot }}

<!-- Pie de página -->
<div class="container-fluid text-white bg-dark bg-gradient">
  <footer class="container py-5">
    <div class="row">
      <div class="col-6 col-md-2 mb-3">
        <h5>Section</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Home</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Features</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Pricing</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">FAQs</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">About</a></li>
        </ul>
      </div>

      <div class="col-6 col-md-2 mb-3">
        <h5>Section</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Home</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Features</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Pricing</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">FAQs</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">About</a></li>
        </ul>
      </div>

      <div class="col-md-5 offset-md-1 mb-3">
        <form>
          <h5>Subscribe to our newsletter</h5>
          <p>Monthly digest of what's new and exciting from us.</p>
          <div class="d-flex flex-column flex-sm-row w-100 gap-2">
            <label for="newsletter1" class="visually-hidden">Email address</label>
            <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
            <button class="btn btn-primary" type="button">Subscribe</button>
          </div>
        </form>
      </div>
    </div>

    <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
      <p>&copy; 2022 Company, Ball City - Medellín. All rights reserved.</p>
      <ul class="list-unstyled d-flex">
        <li class="ms-3">
          <a class="link-light" href="#">
            <i class="bi bi-instagram"></i>
          </a>
        </li>
        <li class="ms-3">
          <a class="link-light" href="#">
            <i class="bi bi-facebook"></i>
          </a>
        </li>
        <li class="ms-3">
          <a class="link-light" href="#">
            <i class="bi bi-youtube"></i>
          </a>
        </li>
        <li class="ms-3">
          <a class="link-light" href="#">
            <i class="bi bi-tiktok"></i>
          </a>
        </li>
      </ul>
    </div>
  </footer>
</div>
</body>
</html>
