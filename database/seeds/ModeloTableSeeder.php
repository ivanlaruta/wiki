<?php

use Illuminate\Database\Seeder;

class ModeloTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trf_modelos')->delete();
        
        DB::table('trf_modelos')->insert
        ([
			'id_categoria'=>'1',
			'descripcion'=>'YARIS HB',
			'estado'=>'1',
        ]);
        DB::table('trf_modelos')->insert
        ([
			'id_categoria'=>'1',
			'descripcion'=>'YARIS SEDAN',
			'estado'=>'1',
        ]);
        DB::table('trf_modelos')->insert
        ([
			'id_categoria'=>'1',
			'descripcion'=>'COROLLA',
			'estado'=>'1',
        ]);
        DB::table('trf_modelos')->insert
        ([
			'id_categoria'=>'1',
			'descripcion'=>'FT86',
			'estado'=>'1',
        ]);
        DB::table('trf_modelos')->insert
        ([
			'id_categoria'=>'1',
			'descripcion'=>'PRIUS',
			'estado'=>'1',
        ]);
        DB::table('trf_modelos')->insert
        ([
			'id_categoria'=>'1',
			'descripcion'=>'CAMRRY',
			'estado'=>'1',
        ]);

		//==========================================================
        DB::table('trf_modelos')->insert
        ([
			'id_categoria'=>'2',
			'descripcion'=>'RAV4',
			'estado'=>'1',
        ]);
        DB::table('trf_modelos')->insert
        ([
			'id_categoria'=>'2',
			'descripcion'=>'PRADO',
			'estado'=>'1',
        ]);
        DB::table('trf_modelos')->insert
        ([
			'id_categoria'=>'2',
			'descripcion'=>'4RUNNER',
			'estado'=>'1',
        ]);
        DB::table('trf_modelos')->insert
        ([
			'id_categoria'=>'2',
			'descripcion'=>'LCRUSER200',
			'estado'=>'1',
        ]);
        DB::table('trf_modelos')->insert
        ([
			'id_categoria'=>'2',
			'descripcion'=>'FJCRUISER',
			'estado'=>'1',
        ]);

        //==========================================================
        DB::table('trf_modelos')->insert
        ([
			'id_categoria'=>'3',
			'descripcion'=>'LAND CRUISER 70',
			'estado'=>'1',
        ]);
        DB::table('trf_modelos')->insert
        ([
			'id_categoria'=>'3',
			'descripcion'=>'HIACE',
			'estado'=>'1',
        ]);
        DB::table('trf_modelos')->insert
        ([
			'id_categoria'=>'3',
			'descripcion'=>'INNOVA',
			'estado'=>'1',
        ]);
        DB::table('trf_modelos')->insert
        ([
			'id_categoria'=>'3',
			'descripcion'=>'COASTER',
			'estado'=>'1',
        ]);

        //==========================================================
        DB::table('trf_modelos')->insert
        ([
			'id_categoria'=>'4',
			'descripcion'=>'HILUX',
			'estado'=>'1',
        ]);
        DB::table('trf_modelos')->insert
        ([
			'id_categoria'=>'4',
			'descripcion'=>'TUNDRA',
			'estado'=>'1',
        ]);
        DB::table('trf_modelos')->insert
        ([
			'id_categoria'=>'4',
			'descripcion'=>'TACOMA',
			'estado'=>'1',
        ]);

        //==========================================================
        DB::table('trf_modelos')->insert
        ([
			'id_categoria'=>'5',
			'descripcion'=>'LEXUS ES350',
			'estado'=>'1',
        ]);
        DB::table('trf_modelos')->insert
        ([
			'id_categoria'=>'5',
			'descripcion'=>'LEXUS GS350',
			'estado'=>'1',
        ]);
        DB::table('trf_modelos')->insert
        ([
			'id_categoria'=>'5',
			'descripcion'=>'LEXUS IS250',
			'estado'=>'1',
        ]);

        //==========================================================
        DB::table('trf_modelos')->insert
        ([
			'id_categoria'=>'6',
			'descripcion'=>'LEXUS RX350',
			'estado'=>'1',
        ]);
        DB::table('trf_modelos')->insert
        ([
			'id_categoria'=>'6',
			'descripcion'=>'LEXUS GX460',
			'estado'=>'1',
        ]);
        DB::table('trf_modelos')->insert
        ([
			'id_categoria'=>'6',
			'descripcion'=>'LEXUS LX570',
			'estado'=>'1',
        ]);
        DB::table('trf_modelos')->insert
        ([
			'id_categoria'=>'6',
			'descripcion'=>'LEXUS NX200T',
			'estado'=>'1',
        ]);

        //==========================================================
        DB::table('trf_modelos')->insert
        ([
			'id_categoria'=>'7',
			'descripcion'=>'HINO DUTRO',
			'estado'=>'1',
        ]);
        DB::table('trf_modelos')->insert
        ([
			'id_categoria'=>'7',
			'descripcion'=>'FC',
			'estado'=>'1',
        ]);
        DB::table('trf_modelos')->insert
        ([
			'id_categoria'=>'7',
			'descripcion'=>'FG',
			'estado'=>'1',
        ]);
        DB::table('trf_modelos')->insert
        ([
			'id_categoria'=>'7',
			'descripcion'=>'GH',
			'estado'=>'1',
        ]);
        DB::table('trf_modelos')->insert
        ([
			'id_categoria'=>'7',
			'descripcion'=>'GD',
			'estado'=>'1',
        ]);
        DB::table('trf_modelos')->insert
        ([
			'id_categoria'=>'7',
			'descripcion'=>'FM',
			'estado'=>'1',
        ]);
        DB::table('trf_modelos')->insert
        ([
			'id_categoria'=>'7',
			'descripcion'=>'SS',
			'estado'=>'1',
        ]);

        //==========================================================
        DB::table('trf_modelos')->insert
        ([
			'id_categoria'=>'8',
			'descripcion'=>'OTROS',
			'estado'=>'1',
        ]);

        //==========================================================
        DB::table('trf_modelos')->insert
        ([
			'id_categoria'=>'9',
			'descripcion'=>'MOTOS DEPORTIVAS',
			'estado'=>'1',
        ]);
        DB::table('trf_modelos')->insert
        ([
			'id_categoria'=>'9',
			'descripcion'=>'MOTOS DE TRABAJO',
			'estado'=>'1',
        ]);
        DB::table('trf_modelos')->insert
        ([
			'id_categoria'=>'9',
			'descripcion'=>'MOTOS DE PASEO',
			'estado'=>'1',
        ]);
        DB::table('trf_modelos')->insert
        ([
			'id_categoria'=>'9',
			'descripcion'=>'CUADRATRACKS',
			'estado'=>'1',
        ]);
        DB::table('trf_modelos')->insert
        ([
			'id_categoria'=>'9',
			'descripcion'=>'OTROS',
			'estado'=>'1',
        ]);
       
    }
}
