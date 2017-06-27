<?php

use Illuminate\Database\Seeder;

class TransportadorasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transportadoras')->delete();

        DB::table('transportadoras')->insert([
            'nombre'=> 'SIN DATO',
            ]);
        
        DB::table('transportadoras')->insert([
            'nombre'=> 'BOLIVIAN EXPRESS',
            ]);

       	DB::table('transportadoras')->insert([
            'nombre'=> 'CEINA LTDA',
            ]);

       	DB::table('transportadoras')->insert([
       	    'nombre'=> 'TRANS DANAIN',
       	    ]);
       	
       	DB::table('transportadoras')->insert([
       	    'nombre'=> 'TRANSFRIO',
       	    ]);
    }
}
