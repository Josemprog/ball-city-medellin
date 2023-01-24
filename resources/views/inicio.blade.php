<x-layouts.app>

  <!-- Portada -->  
  <div class="container-fluid">
    <img src="/img/portada.png" class="img-fluid" alt="...">
  </div>

  <hr class="container">

  <!-- Sección de Videos -->
  <div class="container my-3">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <!-- Tarjetas -->
          
          {{-- #1 --}}
          <div class="col">
            <div class="card shadow-sm">
              <img src="/img/miniatura1.jpg" class="img-fluid" alt="...">
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
              <img src="/img/miniatura2.jpg" class="img-fluid" alt="...">
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
              <img src="/img/miniatura3.jpg" class="img-fluid" alt="...">
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
  </div>

  <hr class="container">

  <!-- ... -->


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

  <hr class="container">

</x-layouts.app>
