<x-layouts.app>
    <div class="container my-5">

        <form action="{{ route('players.store') }}" method="POST" class="container w-75 row m-auto">
            @csrf
            <a href="{{ route('players.index') }}" class="btn btn-primary w-25">
                <i class="bi bi-arrow-return-left"> Volver </i>
            </a>
            
            <h1 class="text-center pb-2">Crea un nuevo Jugador</h1>

            @include('players.form-fields')

            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Crear</button>
            </div>
          </form>
    </div>
</x-layouts.app>