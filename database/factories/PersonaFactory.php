<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Persona;
use Faker\Generator as Faker;

$factory->define(Persona::class, function (Faker $faker) {
//    return [
//        //
//    ];

    return [
        'nombre' => $faker->name,
        'apellido' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'direccion' => $faker->unique()->address,
        'tipo_documento_id' => 1,
        'documento' => random_int(35845250,40000000),
    ];
});
