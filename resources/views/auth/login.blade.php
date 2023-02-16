<x-layouts.app>
    <div class="container">
        <div class="row justify-content-center">
            <h1 class="text-center">Inicia Sesión</h1>

            <form action="{{ route('login') }}" method="POST" class="col-12 col-lg-6 mb-4">
                @csrf

                <div class="mb-3">
                    <label for="inputEmail" class="form-label">Correo Electrónico</label>
                    <input class="form-control form-control-sm" 
                           name="email" id="inputEmail" 
                           type="email" 
                           placeholder="correo@ejemplo.com"
                           value="{{ old('email') }}">
                           @error('email')
                               <div class="alert alert-danger" role="alert">
                               {{ $message }}
                               </div>        
                           @enderror 
                    <div id="emailHelp" class="form-text">Nunca compartiremos su correo electrónico con nadie más.</div>
                </div>

                <div class="mb-3">
                    <label for="inputPassword" class="form-label">Contraseña</label>
                    <input class="form-control form-control-sm" 
                           name="password" id="inputPassword" 
                           type="password" 
                           placeholder="Ingrese su contraseña...">
                           @error('password')
                               <div class="alert alert-danger" role="alert">
                               {{ $message }}
                               </div>        
                           @enderror 
                </div>

                <div class="mb-3 form-check">
                    <input class="form-check-input" 
                           name="remember" id="exampleCheck1"
                           type="checkbox">
                    <label class="form-check-label" for="exampleCheck1">Recuérdame.</label>
                </div>

                {{-- BOTÓN --}}
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