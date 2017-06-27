<?php

use Illuminate\Database\Seeder;

class ResponsablesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('responsables')->delete();

        DB::table('responsables')->insert([
            'ci' => '624542',
            'ex' =>'LP',
            'nombre'=> 'OCTAVIO',
            'paterno'=> 'PAZ',
            ]);

          DB::table('responsables')->insert([
            'ci' => '987452',
            'ex' =>'LP',
            'nombre'=> 'ARMANDO',
            'paterno'=> 'JAENS',
            ]);

          DB::table('responsables')->insert([
            'ci' => '74634534',
            'ex' =>'LP',
            'nombre'=> 'RODOLFO',
            'paterno'=> 'PEÑA',
            ]);

          DB::table('responsables')->insert([
            'ci' => '75434534',
            'ex' =>'LP',
            'nombre'=> 'CRISTIAN',
            'paterno'=> 'SUAREZ',
            ]);

          DB::table('responsables')->insert([
            'ci' => '4325556',
            'ex' =>'LP',
            'nombre'=> 'FREDDY',
            'paterno'=> 'MELENDEZ',
            ]);
    }
}
