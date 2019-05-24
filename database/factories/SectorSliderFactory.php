<?php

use Faker\Generator as Faker;

$factory->define(App\Models\SectorSlider::class, function (Faker $faker) {
    return [
        'titulo' =>  $faker->sentence(8),
        'descripcion' => $faker->sentence(8),
        'imagen' => $faker->imageUrl($width = 1600, $height = 600),
        'user_id' => rand(1,3),
    ];
});
