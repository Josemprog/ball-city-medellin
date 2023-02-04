<x-layouts.app>
    <div class="container my-5">

        <form action="{{ route('players.update', $player) }}" method="POST" class="container w-75 row m-auto">
            @csrf @method('PATCH')

            <a href="{{ route('players.index') }}" class="btn btn-primary w-25">
                <i class="bi bi-arrow-return-left"> Volver </i>
            </a>
            
            <h1 class="text-center">Edita la información de {{ $player->nombre}} {{ $player->apellido }}</h1>
            <p class="text-center h3 text-info mb-4">{{ $player->posicion }} de {{ $player->equipo }}</p>

            @include('players.form-fields')

            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Editar</button>
            </div>
          </form>
    </div>
</x-layouts.app>