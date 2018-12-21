<?php

use Illuminate\Database\Seeder;

class DetalleInvetarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\DetalleInventario::class,100)->create();
    }
}
