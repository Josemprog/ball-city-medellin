<x-layouts.app>
    <img src="/img/jugadores.png" class="img-fluid" alt="">

    <hr class="container">

    <!-- Estadísticas -->
    <div class="container">
        <h1>Estadísticas</h1>

        @auth
            <a href="{{ route('players.create') }}" class="btn btn-primary">
                <i class="bi bi-person-plus-fill"></i>
            </a>
        @endauth
        <a href="{{ route('players.index') }}" class="btn btn-primary">
            <i class="bi bi-arrow-clockwise"></i>
        </a>
        <div class="table-responsive mt-2">
            <table class="table table-sm table-hover text-center">
              <caption>List of users</caption>
              <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Equipo</th>
                    <th scope="col">Posición</th>
                    <th scope="col">Triples</th>
                    <th scope="col">Tiros libres</th>
                    <th scope="col">Puntos</th>
                    <th scope="col">Ver</th>
                    @auth
                    <th scope="col">Editar</th>
                    <th scope="col">Borrar</th>
                    @endauth
                </tr>
              </thead>
              <tbody>
                @foreach($players as $player)
                <tr class="align-middle">
                    <th scope="row"> {{ $player->id }} </th>
                    <td> {{ $player->nombre }} </td>
                    <td> {{ $player->apellido }} </td>
                    <td> {{ $player->equipo }} </td>
                    <td> {{ $player->posicion }} </td>
                    <td> {{ $player->triples }} </td>
                    <td> {{ $player->libres }} </td>
                    <td> {{ $player->puntos }} </td>
                    <td>
                        <a href="{{ route('players.show', $player->id) }}">
                            <i class="btn text-primary bi bi-eye-fill"></i>
                        </a>
                    </td>
                    @auth
                    <td>
                        <a href="{{ route('players.edit', $player->id) }}">
                            <i class="btn text-info bi bi-pencil-square"></i>
                        </a>
                    </td>
                    <td>
                    <form action="{{ route('players.destroy', $player->id) }}" method="POST">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn"><i class="text-danger bi bi-trash"></i></button>
                    </form>
                    </td>
                    @endauth
                </tr>
                @endforeach
              </tbody>
            </table>
            <!-- Paginación -->
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                  <li class="page-item disabled">
                    <a class="page-link">Previous</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                  </li>
                </ul>
              </nav>
          </div>
    </div>

    <hr class="container">

    <!-- Sección de Jugadores -->
    <div class="container-fluid">        
        <div class="row mb-2">
            <!-- Jugador -->
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

            <!-- Jugador -->
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

            <!-- Jugador -->
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

            <!-- Jugador -->
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
        </div>
    </div>
    
</x-layouts.app>