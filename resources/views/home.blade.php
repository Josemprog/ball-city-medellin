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
  
  <!-- Barra de navegación -->       
  <nav class="navbar bg-body navbar-expand-lg sticky-top border-bottom" data-bs-theme="dark">
    <div class="container-fluid">
      <a href="{{ route('home') }}"  class="navbar-brand">
        <img src="/img/marca-ball-city.png" width="80em" alt="Logo de Ball City">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Jugadores</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Videos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Torneos</a>
          </li>
          <li class="nav-item pe-2">
            <a class="nav-link" href="#">Noticias</a>
          </li>
          <hr>
          <li class="nav-item ps-2 border-start" style="--bs-border-width: 2px;">
            <a class="nav-link" href="#">
              <i class="bi bi-cart4"></i>
              Tienda
            </a>
          </li>
        </ul>
        <ul class="navbar-nav">
            <form class="d-flex me-3" role="search">
              <input class="form-control form-control-sm me-1 rounded-5" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-info rounded-pill" type="submit">
                <i class="bi bi-search"></i>
              </button>
            </form>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-person-fill"></i>                        
                Cuenta
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="#">Perfil</a></li>
                <li><a class="dropdown-item" href="#">Configuración</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Cerrar sesión</a></li>
              </ul>
            </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Portada -->  
  <div class="container-fluid">
    <img src="/img/portada.png" class="img-fluid" alt="...">
  </div>

  <!-- Sección de Videos -->
  <div class="container my-3">

    <hr>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <!-- Tarjetas -->
          
          {{-- #1 --}}
          <div class="col">
            <div class="card shadow-sm">
              <img src="/img/miniatura1.jpg" width="100%" height="225" alt="...">
              <div class="card-body">
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, saepe? Eius, quaerat? Illum, delectus alias?.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Others Games</button>
                  </div>
                  <small class="text-muted">20/01/2023</small>
                </div>
              </div>
            </div>
          </div>
          
          {{-- #2 --}}
          <div class="col">
            <div class="card shadow-sm">
              <img src="/img/miniatura2.jpg" width="100%" height="225" alt="...">
              <div class="card-body">
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, saepe? Eius, quaerat? Illum, delectus alias?.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Others Games</button>
                  </div>
                  <small class="text-muted">20/01/2023</small>
                </div>
              </div>
            </div>
          </div>
          
          {{-- #3 --}}
          <div class="col">
            <div class="card shadow-sm">
              <img src="/img/miniatura3.jpg" width="100%" height="225" alt="...">
              <div class="card-body">
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, saepe? Eius, quaerat? Illum, delectus alias?.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Others Games</button>
                  </div>
                  <small class="text-muted">20/01/2023</small>
                </div>
              </div>
            </div>
          </div>
      </div>
    <hr>
    
  </div>

  <!-- Sección de Jugadores -->
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary">Jose Murillo</strong>
            <h3 class="mb-0">Alero de Ball City</h3>
            <div class="mb-1 text-muted">27 años - 1995</div>
            <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="stretched-link">Continue reading</a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <img src="/img/jmurillo.jpg" width="auto" height="250" alt="">
            {{-- <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> --}}
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-success">Carlos Murillo</strong>
            <h3 class="mb-0">Escolta de Mambas</h3>
            <div class="mb-1 text-muted">33 años - 1989</div>
            <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="stretched-link">Continue reading</a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <img src="/img/cmurillo.jpg" width="auto" height="250" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>

  <hr class="container">

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
