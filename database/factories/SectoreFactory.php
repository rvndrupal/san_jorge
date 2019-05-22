<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Sectore::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
    ];
});
