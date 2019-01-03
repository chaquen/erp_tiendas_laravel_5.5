<?php

use Faker\Generator as Faker;

$factory->define(App\DetalleInventario::class, function (Faker $faker) {
    return [
        //
       'fk_id_producto'=>rand(1,500),
	   'fk_id_sede'=>rand(1,4),
	   'fecha_caducidad'=>$faker->date,
	   'cantidad_existencias'=>rand(1,50),
	   'cantidad_devueltas'=>rand(1,50),
	   'precio_venta_sede'=>$faker->randomNumber(5),
	   'precio_mayoreo_sede'=>$faker->randomNumber(5),
	   'porcentaje_ganancia'=>$faker->randomNumber(2),
	   'minimo_inventario_sede'=>rand(0,10),
    ];
});
