<?php

use Faker\Generator as Faker;

$factory->define(App\Models\oracione::class, function (Faker $faker) {
    return [
        'titulo' 	=> $faker->sentence(10),
        'frase' 	=> $faker->sentence(15),
        'bloque' 	=> $faker->randomElement(['Uno','Dos','Tres','Cuatro']),

    ];
});
