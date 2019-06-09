<?php

use Illuminate\Database\Seeder;

class FacturasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        App\Factura::truncate();
        factory(App\Factura::class,5)->create();
    }
}
