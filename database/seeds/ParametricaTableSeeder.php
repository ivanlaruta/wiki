<?php

use Illuminate\Database\Seeder;

class ParametricaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trf_parametricas')->delete();
        
        DB::table('trf_parametricas')->insert
        ([
			'tabla'=>'rol',
			'codigo'=>'100',
			'descripcion'=>'TRAFICO',
			'estado'=>'1',
        ]);

        DB::table('trf_parametricas')->insert
        ([
			'tabla'=>'genero',
			'codigo'=>'F',
			'descripcion'=>'FEMENINO',
			'estado'=>'1',
        ]);

        DB::table('trf_parametricas')->insert
        ([
			'tabla'=>'genero',
			'codigo'=>'M',
			'descripcion'=>'MASCULINO',
			'estado'=>'1',
        ]);

        DB::table('trf_parametricas')->insert
        ([
			'tabla'=>'rango_edades',
			'codigo'=>'1',
			'descripcion'=>'18-25',
			'estado'=>'1',
        ]);

        DB::table('trf_parametricas')->insert
        ([
			'tabla'=>'rango_edades',
			'codigo'=>'2',
			'descripcion'=>'26-35',
			'estado'=>'1',
        ]);

        DB::table('trf_parametricas')->insert
        ([
			'tabla'=>'rango_edades',
			'codigo'=>'3',
			'descripcion'=>'36-45',
			'estado'=>'1',
        ]);

        DB::table('trf_parametricas')->insert
        ([
			'tabla'=>'rango_edades',
			'codigo'=>'4',
			'descripcion'=>'MAYOR A 46',
			'estado'=>'1',
        ]);

        DB::table('trf_parametricas')->insert
        ([
			'tabla'=>'tipo_cliente',
			'codigo'=>'1',
			'descripcion'=>'NUEVO',
			'estado'=>'1',
        ]);

        DB::table('trf_parametricas')->insert
        ([
			'tabla'=>'tipo_cliente',
			'codigo'=>'2',
			'descripcion'=>'ANTIGUO',
			'estado'=>'1',
        ]);
    }
}
