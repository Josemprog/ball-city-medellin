<x-layouts.app>
    <div class="container">
        <div class="row m-5">
            <div class="col">
                <h1>{{ $player->nombre, }} {{ $player->apellido }}</h1>
                <p class="h4 text-info">{{ $player->posicion }} de {{ $player->equipo }}</p>
                <p>1.82m - 27 años | 1995</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse excepturi rerum quisquam et voluptate laudantium nam, nostrum fugiat aut? In.</p>

            </div>
            <div class="col">

                <h5>Tiro de tres</h5>
                <div class="progress my-2" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar" style="width: 35.5%">3.5 por partido</div>
                </div>

                <h5>Tiro de media</h5>
                <div class="progress my-2" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar" style="width: 40%">8.5 por partido</div>
                </div>

                <h5>Tiros de libres</h5>
                <div class="progress my-2" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar" style="width: 25%">2.5 por partido</div>
                </div>

                <h5>Puntos</h5>
                <div class="progress my-2" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar" style="width: 70%">26.5 por partido</div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>