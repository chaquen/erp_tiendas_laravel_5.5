<?php

use Illuminate\Database\Seeder;

class SalidaContableTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\SalidaContable::class,10)->create();
    }
}
