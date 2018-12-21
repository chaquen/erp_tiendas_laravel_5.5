<?php

use Faker\Generator as Faker;

$factory->define(App\Proveedor::class, function (Faker $faker) {
     return [
           'nombre_proveedor'=>$faker->name,
           'nit'=>$faker->bankAccountNumber,
           'nombre_contacto_proveedor'=>$faker->name,
           'telefono_contacto_proveedor'=>$faker->phoneNumber,
           'direccion_contacto_proveedor'=>$faker->streetAddress,
           'email_contacto_proveedor'=>$faker->email,
        ];
});
