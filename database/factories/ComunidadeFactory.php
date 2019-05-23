<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Comunidade::class, function (Faker $faker) {
    return [
        'titulo' => $faker->sentence(2),
        'descripcion' => $faker->sentence(2),
        'link' => $faker->sentence(8),
        'imagen' => $faker->imageUrl($width = 200, $height = 200),

    ];
});
