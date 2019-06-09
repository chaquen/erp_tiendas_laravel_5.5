<?php

use Illuminate\Database\Seeder;

class EntradaContableTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        App\EntradaContable::truncate();
        factory(App\EntradaContable::class,20)->create();
    }
}
