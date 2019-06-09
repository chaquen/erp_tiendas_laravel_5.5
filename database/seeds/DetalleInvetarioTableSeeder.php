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
        App\DetalleInventario::truncate();
        factory(App\DetalleInventario::class,5000)->create();
    }
}
