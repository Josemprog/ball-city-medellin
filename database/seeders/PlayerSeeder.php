<?php

namespace Database\Seeders;

use App\Models\Player;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('players')->insert([
            'numero'    => 23,
            'nombre'    => 'Jose',
            'apellido'    => 'Murillo',
            'equipo'    => 'Ball City',
            'posicion'    => 'Armador',
            'triples'    => 5,
            'libres'    => 7,
            'puntos'    => 30,
        ]);

        Player::factory(6)->create();
    }
}
