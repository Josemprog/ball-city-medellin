<x-layouts.app>
    <div class="container my-5">

        <form action="{{ route('players.update', $player) }}" method="POST" class="container w-75 row m-auto">
            @csrf @method('PATCH')

            <a href="{{ route('players.index') }}" class="btn btn-primary w-25">
                <i class="bi bi-arrow-return-left"> Volver </i>
            </a>
            
            <h1 class="text-center pb-2">Edita la información del Jugador</h1>

            <div class="col-12 col-sm-6">
                <!-- INPUTS -->
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Número de Uniforme" name="numero" value=" {{ old('numero', $player->numero ) }}" >
                    <label for="floatingInput">Número</label>
                </div>
                {{-- --- --}}
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Nombre" name="nombre" value=" {{ old('nombre', $player->nombre ) }}" >
                    <label for="floatingInput">Nombre</label>
                </div>
                {{-- --- --}}
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Apellido" name="apellido" value=" {{ old('apellido', $player->apellido ) }}" >
                    <label for="floatingInput">Apellido</label>
                </div>
                {{-- --- --}}
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Equipo" name="equipo" value=" {{ old('equipo', $player->equipo ) }}" >
                    <label for="floatingInput">Equipo</label>
                </div>
            </div>

           <div class="col-12 col-sm-6">
             {{-- --- --}}
             <div class="form-floating mb-3">
                 <input type="text" class="form-control" id="floatingInput" placeholder="Posición" name="posicion" value=" {{ old('posicion', $player->posicion ) }}" >
                 <label for="floatingInput">Posición</label>
             </div>
             {{-- --- --}}
             <div class="form-floating mb-3">
                 <input type="text" class="form-control" id="floatingInput" placeholder="Triples" name="triples" value=" {{ old('triples', $player->triples ) }}" >
                 <label for="floatingInput">Triples</label>
             </div>
             {{-- --- --}}
             <div class="form-floating mb-3">
                 <input type="text" class="form-control" id="floatingInput" placeholder="Tiros Libres" name="libres" value=" {{ old('libres', $player->libres ) }}" >
                 <label for="floatingInput">Tiros Libres</label>
             </div>
             {{-- --- --}}
             <div class="form-floating mb-3">
                 <input type="text" class="form-control" id="floatingInput" placeholder="Puntos" name="puntos" value=" {{ old('puntos', $player->puntos ) }}" >
                 <label for="floatingInput">Puntos</label>
             </div>
           </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Editasssr</button>
            </div>
          </form>
    </div>
</x-layouts.app>