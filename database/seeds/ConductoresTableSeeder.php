<?php

use Illuminate\Database\Seeder;

class ConductoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('conductores')->delete();

        DB::table('conductores')->insert([
            'ci' => '0',
            'ex' =>'0',
            'nombre'=> 'SIN',
            'paterno'=> 'DATO',
            ]);

        DB::table('conductores')->insert([
            'ci' => '987452',
            'ex' =>'LP',
            'nombre'=> 'SAMUEL',
            'paterno'=> 'RIOS',
            ]);

        DB::table('conductores')->insert([
            'ci' => '9874522',
            'ex' =>'LP',
            'nombre'=> 'JAIME',
            'paterno'=> 'CARLO',
            ]);

        DB::table('conductores')->insert([
            'ci' => '874485',
            'ex' =>'LP',
            'nombre'=> 'JOSE',
            'paterno'=> 'PACHECO',
            ]);

        DB::table('conductores')->insert([
            'ci' => '354851',
            'ex' =>'LP',
            'nombre'=> 'CARLOS',
            'paterno'=> 'MONTERO',
            ]);

        DB::table('conductores')->insert([
            'ci' => '9754246',
            'ex' =>'LP',
            'nombre'=> 'PEDRO',
            'paterno'=> 'CONTRERAS',
            ]);

    }
}
