<x-layouts.app>
    <div class="container">
        <div class="row justify-content-center">
            <h1 class="text-center">Registrate</h1>

            <form action="{{ route('registro') }}" method="POST" class="col-12 col-lg-6 mb-4">
                @csrf 

                <div class="mb-3">
                    <label for="inputName" class="form-label">Nombre*</label>
                    <input class="form-control form-control-sm" autofocus="autofocus"
                           name="name" 
                           type="text"                            
                           id="inputName"
                           placeholder="Ingrese su nombre..." 
                           value="{{ old('name') }}">
                    @error('name')
                        <div class="alert alert-danger" role="alert">
                        {{ $message }}
                        </div>        
                    @enderror 
                    <div class="form-text">Primer y segundo nombre (el segundo nombre es opcional).</div>
                </div>

                <div class="mb-3">
                    <label for="inputEmail" class="form-label">Correo Electronico*</label>
                    <input class="form-control form-control-sm" 
                           name="email"
                           type="email"                           
                           id="inputEmail" 
                           placeholder="correo@ejemplo.com"
                           value="{{ old('email') }}">
                    @error('email')
                        <div class="alert alert-danger" role="alert">
                        {{ $message }}
                        </div>        
                    @enderror 
                    <div class="form-text">Nunca compartiremos su correo electrónico con nadie más.</div>
                </div>

                <div class="mb-3">
                    <label for="inputPassword" class="form-label">Contraseña*</label>
                    <input class="form-control form-control-sm" 
                           name="password" 
                           type="password"                        
                           placeholder="Ingrese su contraseña..." 
                           id="inputPassword">
                    @error('password')
                        <div class="alert alert-danger" role="alert">
                        {{ $message }}
                        </div>        
                    @enderror 
                    <div class="form-text">Esta debe contener mínimo 8 caracteres entre números y letras.</div>
                </div>

                <div class="mb-3">
                    <label for="inputConfirmPassword" class="form-label">Confirmar Contraseña*</label>
                    <input class="form-control form-control-sm"
                           name="password_confirmation"                             
                           type="password" 
                           placeholder="Confirme su contraseña..." 
                           id="inputPasswordConfirmation">
                    @error('password_confirmation')
                        <div class="alert alert-danger" role="alert">
                        {{ $message }}
                        </div>        
                    @enderror 
                    <div class="form-text">Esta debe ser idéntica a la anterior.</div>
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-dark btn-block">Registrarme</button>
                </div>

                <div class="mt-3 text-center">
                    <h6>¿Ya tienes una cuenta? <span class="badge bg-secondary"><a class="nav-link" href="{{ route('login') }}">Inicia Sesión!</a></span></h6>
                </div>
                
            </form>
        </div>
    </div>

</x-layouts.app>