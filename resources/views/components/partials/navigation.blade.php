<nav class="navbar bg-body navbar-expand-lg sticky-top border-bottom mb-4" data-bs-theme="dark">
    <div class="container-fluid">
        <a href="{{ route('inicio') }}"  class="navbar-brand">
        <img src="/img/marca-ball-city.png" width="80em" alt="Logo de Ball City">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
            
        <!-- Links!! -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ route('inicio') }}">Home</a>
            </li>
            @if (1 == 1)
                <li class="nav-item">
                   <a class="nav-link" href="{{ route('players.index') }}">Jugadores</a>
                </li>                
            @endif
            <li class="nav-item">
            <a class="nav-link" href="{{ route('videos') }}">Videos</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ route('torneos') }}">Torneos</a>
            </li>
            <li class="nav-item pe-2">
            <a class="nav-link" href="{{ route('noticias') }}">Noticias</a>
            </li>
            <hr>
            <li class="nav-item px-2 border-start border-end" style="--bs-border-width: 2px;">
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
            @if (1 == 2)
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
            @else
            <li class="nav-item my-2 my-lg-0 mx-lg-2">
                <a class="btn btn-outline-dark" href="{{ route('login') }}">Iniciar Sesión</a>
            </li>
            <li class="nav-item mb-2 mb-lg-0">
                <a class="btn btn-outline-dark" href="{{ route('registro') }}">Registrarse</a>
            </li>                
            @endif
        </ul>
        </div>
    </div>
</nav>