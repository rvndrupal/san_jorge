<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Slider::class, function (Faker $faker) {
    return [
        'sli_imagen' => $faker->imageUrl($width = 1600, $height = 600),
        'sli_textouno' => $faker->sentence(8),
        'sli_textodos' => $faker->sentence(8),
    ];
});
