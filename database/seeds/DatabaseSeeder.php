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
         $this->call(ConductoresTableSeeder::class);
         $this->call(ResponsablesTableSeeder::class);
         $this->call(TransportadorasTableSeeder::class);
    }
}
