<?php

namespace Database\Factories;

use App\Models\Libro;
use Faker\Generator as Faker;

define(Libro::class, function (Faker $faker) {
    return [
        'titulo' => $faker->sentence,
        'editorial' => $faker->sentence(2),
        'precio' => $faker->randomFloat(2, 5, 20)
    ];
});
