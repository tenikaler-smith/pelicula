<?php

namespace Database\Factories;

use App\Models\Pelicula;
use Illuminate\Database\Eloquent\Factories\Factory;

class PeliculaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pelicula::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $factory->define(App\Pelicula::class, function($faker) {
            return [
                'titulo' => $faker->sentence(2),
                'descripcion' => $faker->paragraph,
                'id_genero' => $faker->randomDigit,
                'precio' => $faker->randomFloat,
                'imagen' => $faker->imageUrl(326, 480),
            ];
        });
    }
}
