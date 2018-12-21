<?php

use Faker\Generator as Faker;

$factory->define(App\SalidaContable::class, function (Faker $faker) {
    return [
           'nombre_salida'=>$faker->name,
           'descripcion_salida'=>$faker->name,
           'maximo_valor_salida'=>$faker->randomNumber(5),
    ];
});
