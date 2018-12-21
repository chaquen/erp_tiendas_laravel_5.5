<?php

use Faker\Generator as Faker;

$factory->define(App\Factura::class, function (Faker $faker) {
    return [
        'fk_id_vendedor'=>rand(1,3),
    	'fk_id_cliente'=>rand(1,5),
    	'estado_factura'=>'paga',
    	'fk_id_sede'=>rand(1,5),
    	'observaciones'=>$faker->name
    ];
});
