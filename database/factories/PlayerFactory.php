<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Player>
 */
class PlayerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $equipos = ['Mambas', 'Baco', 'Fortaleza', 'Jireh', 'Monstar', 'Calvario', 'Ballers', 'DeporCizne'];
        $posiciones = ['Base', 'Escolta', 'Alero', 'Pivot', 'Tirador'];

        return [
            'numero'    => fake()->numberBetween(0,99),
            'nombre'    => fake()->firstNameMale(),
            'apellido'  => fake()->lastName(),
            'equipo'    => fake()->randomElement($equipos),
            'posicion'  => fake()->randomElement($posiciones),
            'triples'   => fake()->numberBetween(0,5),
            'libres'    => fake()->numberBetween(0,10),
            'puntos'    => fake()->numberBetween(1,36)
        ];
    }
}
