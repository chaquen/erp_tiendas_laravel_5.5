<?php

use Faker\Generator as Faker;

$factory->define(App\EntradaContable::class, function (Faker $faker) {
    return [
         'nombre_entrada'=>$faker->name,
          'descripcion_entrada'=>$faker->name,
          'maximo_valor_entrada'=>$faker->randomNumber(5),
    ];
});
