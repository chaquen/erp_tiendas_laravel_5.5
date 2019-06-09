<?php

use Illuminate\Database\Seeder;

class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        App\Cliente::truncate();
        factory(App\Cliente::class, 5)->create();
    }
}
