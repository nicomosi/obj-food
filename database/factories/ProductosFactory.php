<?php

use Faker\Generator as Faker;
use App\Producto;

$factory->define(App\Producto::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'precio' => $faker->numberBetween(900, 7000),
        'stock' => $faker->numberBetween(2, 10),
        'foto1' => 'default.jpg',
        'foto2' => 'default.jpg',
        'foto3' => 'default.jpg',
    ];
});
