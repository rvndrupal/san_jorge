<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Bloqueuno::class, function (Faker $faker) {
    return [
        "email" => $faker->name,
        "direccion" => $faker->name,
        "telefono" => $faker->name,
    ];
});
