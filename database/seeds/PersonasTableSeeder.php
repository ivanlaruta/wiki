<?php

use Illuminate\Database\Seeder;

class PersonasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personas')->delete();
        
		DB::table('personas')->insert([
		'id'=>'1',
		'nombre'=>'EDWIN SANTOS',
		'paterno'=>'SAAVEDRA',
		'materno'=>'TOLEDO',
		'genero'=>'M',
		]);
		DB::table('personas')->insert([
		'id'=>'2',
		'nombre'=>'ERIKA',
		'paterno'=>'MENDIZABAL',
		'materno'=>'DE SAAVEDRA',
		'genero'=>'F',
		]);
		DB::table('personas')->insert([
		'id'=>'3',
		'nombre'=>'SERGIO RODRIGO',
		'paterno'=>'SAAVEDRA',
		'materno'=>'MENDIZABAL',
		'genero'=>'M',
		]);
		DB::table('personas')->insert([
		'id'=>'4',
		'nombre'=>'EDWARD DANILO',
		'paterno'=>'SAAVEDRA',
		'materno'=>'MENDIZABAL',
		'genero'=>'M',
		]);
		DB::table('personas')->insert([
		'id'=>'5',
		'nombre'=>'WILMA DEL ROSARIO',
		'paterno'=>'SAAVEDRA',
		'materno'=>'TOLEDO',
		'genero'=>'F',
		]);
		DB::table('personas')->insert([
		'id'=>'6',
		'nombre'=>'ESTEBAN SANTOS',
		'paterno'=>'SAAVEDRA',
		'materno'=>'NUMBELA',
		'genero'=>'M',
		]);
		DB::table('personas')->insert([
		'id'=>'7',
		'nombre'=>'ELIZABETH',
		'paterno'=>'JANNONE',
		'materno'=>'DESAUCEDO',
		'genero'=>'F',
		]);
		DB::table('personas')->insert([
		'id'=>'8',
		'nombre'=>'ERICK MICHEL',
		'paterno'=>'SAAVEDRA',
		'materno'=>'MENDIZABAL',
		'genero'=>'M',
		]);
		DB::table('personas')->insert([
		'id'=>'9',
		'nombre'=>'ROLANDO',
		'paterno'=>'OLMOS	',
		'genero'=>'M',
		]);
		DB::table('personas')->insert([
		'id'=>'10',
		'nombre'=>'GIORGIO DARIO',
		'paterno'=>'BENUCCI',
		'genero'=>'M',
		]);
		DB::table('personas')->insert([
		'id'=>'11',
		'nombre'=>'BLANCA AZUCENA',
		'paterno'=>'PAREDES',
		'materno'=>'VEGA',
		'genero'=>'F',
		]);
		DB::table('personas')->insert([
		'id'=>'12',
		'nombre'=>'HALMAR ERNESTO',
		'paterno'=>'TEJERINA',
		'materno'=>'ENDARA',
		'genero'=>'M',
		]);
		DB::table('personas')->insert([
		'id'=>'13',
		'nombre'=>'JORGE ALEJANDRO',
		'paterno'=>'NUMBELA',
		'materno'=>'SAAVEDRA',
		'genero'=>'M',
		]);
		DB::table('personas')->insert([
		'id'=>'14',
		'nombre'=>'PABLO LUIS GONZALO',
		'paterno'=>'SOTO',
		'materno'=>'QUIROGA',
		'genero'=>'M',
		]);
		DB::table('personas')->insert([
		'id'=>'15',
		'nombre'=>'SERGIO AROON',
		'paterno'=>'ASSEFF',
		'materno'=>'TALAVERA',
		'genero'=>'M',
		]);
		DB::table('personas')->insert([
		'id'=>'16',
		'nombre'=>'JAIME GERARDO',
		'paterno'=>'ROJAS',
		'materno'=>'SILVA',
		'genero'=>'M',
		]);
		DB::table('personas')->insert([
		'id'=>'18',
		'nombre'=>'VALDIMIR',
		'paterno'=>'GUTIERREZ',
		'materno'=>'ALDANA',
		'genero'=>'M',
		]);
		DB::table('personas')->insert([
		'id'=>'19',
		'nombre'=>'ZOCIMO',
		'paterno'=>'FARIAS	',
		'genero'=>'M',
		]);
		DB::table('personas')->insert([
		'id'=>'20',
		'nombre'=>'GERARDO',
		'paterno'=>'ROJAS',
		'materno'=>'SILVA',
		'genero'=>'M',
		]);
		DB::table('personas')->insert([
		'id'=>'21',
		'nombre'=>'JAVIER',
		'paterno'=>'VIA	',
		'genero'=>'M',
		]);
		DB::table('personas')->insert([
		'id'=>'22',
		'nombre'=>'RODRIGO',
		'paterno'=>'GUTIERREZ',
		'genero'=>'M',
		]);


		DB::table('personas')->insert([
		'id'=>'23',
		'nombre'=>'BERNARDO',
		'paterno'=>'AKIME',
		'genero'=>'M',
		]);
		DB::table('personas')->insert([
		'id'=>'24',
		'nombre'=>'CARLOS',
		'paterno'=>'SOLIZ',
		'genero'=>'M',
		]);
		DB::table('personas')->insert([
		'id'=>'25',
		'nombre'=>'ALEJANDRO',
		'paterno'=>'BALLON',
		'genero'=>'M',
		]);
		DB::table('personas')->insert([
		'id'=>'26',
		'nombre'=>'MIROSLAVA',
		'paterno'=>'RALJEVIC',
		'genero'=>'M',
		]);
		DB::table('personas')->insert([
		'id'=>'27',
		'nombre'=>'MARCELO',
		'paterno'=>'TERAN',
		'genero'=>'M',
		]);
		DB::table('personas')->insert([
		'id'=>'28',
		'nombre'=>'IULIIA',
		'paterno'=>'BULAT',
		'genero'=>'F',
		]);
		DB::table('personas')->insert([
		'id'=>'29',
		'nombre'=>'SERGIO',
		'paterno'=>'JIMENEZ',
		'genero'=>'M',
		]);


		DB::table('personas')->insert([
		'id'=>'1000',
		'nombre'=>'desconocido',
		'paterno'=>'desconocido',
		'genero'=>'M',
		]);

    }
}
