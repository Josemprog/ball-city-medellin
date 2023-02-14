<div class="col-12 col-sm-6">
    <!-- INPUTS -->
    {{-- Nombre --}}
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="Nombre" name="nombre" value=" {{ old('nombre', $player->nombre ) }}" >
        <label for="floatingInput">Nombre</label>
        @error('nombre')
            <div class="alert alert-danger" role="alert">
            {{ $message }}
            </div>        
        @enderror        
    </div>
    {{-- Apellido --}}
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="Apellido" name="apellido" value=" {{ old('apellido', $player->apellido ) }}" >
        <label for="floatingInput">Apellido</label>
        @error('apellido')
            <div class="alert alert-danger" role="alert">
            {{ $message }}
            </div>        
        @enderror       
    </div>
    {{-- Equipo --}}
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="Equipo" name="equipo" value=" {{ old('equipo', $player->equipo ) }}" >
        <label for="floatingInput">Equipo</label>
        @error('equipo')
            <div class="alert alert-danger" role="alert">
            {{ $message }}
            </div>        
        @enderror       
    </div>
    {{-- Posición --}}
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="Posición" name="posicion" value=" {{ old('posicion', $player->posicion ) }}" >
        <label for="floatingInput">Posición</label>
        @error('posicion')
           <div class="alert alert-danger" role="alert">
           {{ $message }}
           </div>        
        @enderror       
    </div>
</div>

<div class="col-12 col-sm-6">
 {{-- Triples --}}
 <div class="form-floating mb-3">
     <input type="text" class="form-control" id="floatingInput" placeholder="Triples" name="triples" value=" {{ old('triples', $player->triples ) }}" >
     <label for="floatingInput">Triples</label>
     @error('triples')
        <div class="alert alert-danger" role="alert">
        {{ $message }}
        </div>        
     @enderror    
 </div>
 {{-- Tiros Libres --}}
 <div class="form-floating mb-3">
     <input type="text" class="form-control" id="floatingInput" placeholder="Tiros Libres" name="libres" value=" {{ old('libres', $player->libres ) }}" >
     <label for="floatingInput">Tiros Libres</label>
     @error('libres')
        <div class="alert alert-danger" role="alert">
        {{ $message }}
        </div>        
     @enderror    
 </div>
 {{-- Puntos --}}
 <div class="form-floating mb-3">
     <input type="text" class="form-control" id="floatingInput" placeholder="Puntos" name="puntos" value=" {{ old('puntos', $player->puntos ) }}" >
     <label for="floatingInput">Puntos</label>
     @error('puntos')
        <div class="alert alert-danger" role="alert">
        {{ $message }}
        </div>        
     @enderror    
 </div>
</div>