<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         /*$this->call(UsersTableSeeder::class);
         $this->call(CategoriasTableSeeder::class);
         $this->call(ProductosTableSeeder::class);
         $this->call(ClientesTableSeeder::class);
         $this->call(ProveedoresTableSeeder::class);
         $this->call(EntradaContableTableSeeder::class);
         $this->call(SalidaContableTableSeeder::class);
         $this->call(SedesTableSeeder::class);
         $this->call(FacturasTableSeeder::class);*/
         $this->call(DetalleInvetarioTableSeeder::class);


    }
}
