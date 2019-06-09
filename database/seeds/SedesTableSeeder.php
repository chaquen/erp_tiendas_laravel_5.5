<?php

use Illuminate\Database\Seeder;

class SedesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Sede::truncate();
        factory(App\Sede::class,5)->create();	
    }
}
