<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Curso;
use Faker\Generator as Faker;

$factory->define(Curso::class, function (Faker $faker) {
    return [
        'nombre' => $faker->unique()->jobTitle,
        'codigo' => $faker->unique()->slug,
        'facultad_id' => random_int(1,4),
    ];
});
