<?php

namespace Database\Factories;

use App\Models\Autor;
use Faker\Generator as Faker;

$factory->define(Autor::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'nacimiento' => $faker->numberBetween(1950, 1990)
    ];
});
