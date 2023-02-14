<x-layouts.app>
    <div class="container">
        <div class="row justify-content-center">
            <h1 class="text-center">Registrate</h1>

            <form class="col-12 col-lg-6 mb-4">
                <div class="mb-3">
                    <label for="inputName" class="form-label">Nombre*</label>
                    <input id="inputName" type="text" class="form-control form-control-sm" placeholder="Ingrese su nombre..." aria-describedby="nameHelp">
                    <div id="emailHelp" class="form-text">Primer y segundo nombre (el segundo nombre es opcional).</div>
                </div>
                <div class="mb-3">
                    <label for="inputLastname" class="form-label">Apellido*</label>
                    <input id="inputLastname" type="text" class="form-control form-control-sm" placeholder="Ingrese su apellido...">
                </div>
                <div class="mb-3">
                    <label for="inputEmail" class="form-label">Correo Electronico*</label>
                    <input id="inputEmail" type="email" class="form-control form-control-sm" placeholder="correo@ejemplo.com" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">Nunca compartiremos su correo electrónico con nadie más.</div>
                </div>
                <div class="mb-3">
                    <label for="inputPassword" class="form-label">Contraseña*</label>
                    <input id="inputPassword" type="password" class="form-control form-control-sm" placeholder="Ingrese su contraseña..." aria-describedby="passwordHelp">
                    <div id="emailHelp" class="form-text">Esta debe contener mínimo 8 caracteres entre números y letras.</div>
                </div>
                <div class="mb-3">
                    <label for="inputConfirmPassword" class="form-label">Confirmar Contraseña*</label>
                    <input id="inputConfirmPassword" type="password" class="form-control form-control-sm" placeholder="Confirme su contraseña...">
                    <div id="emailHelp" class="form-text">Esta debe ser idéntica a la anterior.</div>
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