<?php

use Illuminate\Database\Seeder;

class ProveedoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Proveedor::truncate();
       factory(App\Proveedor::class,10)->create();
    }
}
