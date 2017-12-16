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
         $this->call(UsersTableSeeder::class);
         $this->call(PersonasTableSeeder::class);
         $this->call(EmpresasTableSeeder::class);
         $this->call(AccionistasTableSeeder::class);
         $this->call(EmpresasAccionistasTableSeeder::class);
         $this->call(ParametricaTableSeeder::class);
         $this->call(ResponsablesTableSeeder::class);
    }
}
