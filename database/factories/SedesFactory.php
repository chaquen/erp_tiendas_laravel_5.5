<?php

use Faker\Generator as Faker;

$factory->define(App\Sede::class, function (Faker $faker) {
    return [
		'nombre_sede'=>$faker->name,
        'codigo_sede'=>$faker->randomNumber(4),
        'direccion_sede'=>$faker->streetAddress,
        'telefono_sede'=>$faker->phoneNumber,
        'fk_id_administrador'=>1,
    ];
});
