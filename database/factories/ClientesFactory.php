<?php

use Faker\Generator as Faker;

$factory->define(App\Cliente::class, function (Faker $faker) {
    return [
        'nombre_cliente'=>$faker->name,
		'documento'=>$faker->randomNumber(2),
		'email'=>$faker->email,
		'celular'=>$faker->phoneNumber,
		'telefono'=>$faker->phoneNumber,
		'direccion'=>$faker->streetAddress,
		'limite_de_credito'=>$faker->randomNumber(3)
        
    ];
});
