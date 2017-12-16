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
        DB::table('parametricas')->delete();
        
		DB::table('parametricas')->insert([
		'tabla'=>'area',
		'codigo'=>'1',
		'nombre'=>'RECURSOS HUMANOS',
		'nombre_corto'=>'RRHH',
		]);
		DB::table('parametricas')->insert([
		'tabla'=>'area',
		'codigo'=>'2',
		'nombre'=>'FINANZAS',
		'nombre_corto'=>'FIN',
		]);
		DB::table('parametricas')->insert([
		'tabla'=>'area',
		'codigo'=>'3',
		'nombre'=>'AUDITORIA',
		'nombre_corto'=>'AUDI',
		]);
		DB::table('parametricas')->insert([
		'tabla'=>'area',
		'codigo'=>'4',
		'nombre'=>'MARKETING',
		'nombre_corto'=>'MKT',
		]);
		DB::table('parametricas')->insert([
		'tabla'=>'area',
		'codigo'=>'5',
		'nombre'=>'SISTEMAS',
		'nombre_corto'=>'SIS',
		]);
		DB::table('parametricas')->insert([
		'tabla'=>'area',
		'codigo'=>'6',
		'nombre'=>'CONTROL',
		'nombre_corto'=>'CTRL',
		]);
		DB::table('parametricas')->insert([
		'tabla'=>'area',
		'codigo'=>'7',
		'nombre'=>'LEGAL',
		'nombre_corto'=>'LEGAL',
		]);

		/////////////////// CRITICIDAD 

		DB::table('parametricas')->insert([
		'tabla'=>'criticidad',
		'codigo'=>'1',
		'nombre'=>'POCO CRITICO',
		'nombre_corto'=>'BAJO',
		]);
		DB::table('parametricas')->insert([
		'tabla'=>'criticidad',
		'codigo'=>'2',
		'nombre'=>'MEDIANAMENTE CRITICO',
		'nombre_corto'=>'MEDIO',
		]);
		DB::table('parametricas')->insert([
		'tabla'=>'criticidad',
		'codigo'=>'3',
		'nombre'=>'MUY CRITICO',
		'nombre_corto'=>'ALTO',
		]);

		/////////////////// ESTADO_aCTIVIDAD

		DB::table('parametricas')->insert([
		'tabla'=>'estado_actividad',
		'codigo'=>'1',
		'nombre'=>'PENDIENTE',
		]);
		DB::table('parametricas')->insert([
		'tabla'=>'estado_actividad',
		'codigo'=>'2',
		'nombre'=>'EN PROCESO',
		]);
		DB::table('parametricas')->insert([
		'tabla'=>'estado_actividad',
		'codigo'=>'3',
		'nombre'=>'FINALIZADO',
		]);
    }
}
