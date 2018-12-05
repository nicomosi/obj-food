<?php

use Faker\Generator as Faker;
use App\Producto;

$factory->define(App\Producto::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'precio' => $faker->numberBetween(900, 7000),
        'stock' => $faker->numberBetween(2, 10),
        'descripcion' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.',
        'foto1' => 'default.jpg',
        'foto2' => 'default.jpg',
        'foto3' => 'default.jpg',
    ];
});
