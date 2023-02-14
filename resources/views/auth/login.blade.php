<x-layouts.app>
    <div class="container">
        <div class="row justify-content-center">
            <h1 class="text-center">Inicia Sesión</h1>

            <form class="col-12 col-lg-6 mb-4">
                <div class="mb-3">
                    <label for="inputEmail" class="form-label">Correo Electrónico</label>
                    <input id="inputEmail" type="email" class="form-control form-control-sm" placeholder="correo@ejemplo.com" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">Nunca compartiremos su correo electrónico con nadie más.</div>
                </div>
                <div class="mb-3">
                    <label for="inputPassword" class="form-label">Contraseña</label>
                    <input id="inputPassword" type="password" class="form-control form-control-sm" placeholder="Ingrese su contraseña...">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Recuérdame.</label>
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-dark btn-block">Iniciar Sesión</button>
                </div>                

                <div class="mt-3 text-center">
                    <h6>¿No tienes una cuenta? <span class="badge bg-secondary"><a class="nav-link" href="{{ route('registro') }}">Registrate!</a></span></h6>
                </div>
                
            </form>
        </div>
    </div>

</x-layouts.app>