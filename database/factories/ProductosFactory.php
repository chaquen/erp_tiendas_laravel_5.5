<?php

use Faker\Generator as Faker;

$factory->define(App\Producto::class, function (Faker $faker) {
   $arr=['PorUnidad','AGranel','Kit','Caja'];	
   return [
        'codigo_producto' => $faker->bankAccountNumber,
		'nombre_producto' => $faker->name,
		'descripcion_producto' => $faker->name,
		'tipo_venta_producto' => $arr[rand(0,3)],
		'unidades_por_caja' => $faker->randomNumber(2),
		'precio_compra' => $faker->randomNumber(3),
		'precio_venta' => $faker->randomNumber(3),
		'precio_mayoreo' => $faker->randomNumber(3),
		'porcentaje_ganancia' => $faker->randomNumber(1),
		'minimo_inventario' => $faker->randomNumber(1),
		'maximo_inventario' => $faker->randomNumber(1),
		'fk_id_categoria' => rand(1,50)
        
    ];
});
