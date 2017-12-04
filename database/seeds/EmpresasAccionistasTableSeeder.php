<?php

use Illuminate\Database\Seeder;

class EmpresasAccionistasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empresas_accionistas')->delete();
        
		DB::table('empresas_accionistas')->insert([
			'id_empresa'=>'1',
			'id_accionista'=>'1',
		]);
		DB::table('empresas_accionistas')->insert([
			'id_empresa'=>'1',
			'id_accionista'=>'2',
		]);
		DB::table('empresas_accionistas')->insert([
			'id_empresa'=>'1',
			'id_accionista'=>'3',
		]);


		DB::table('empresas_accionistas')->insert([
			'id_empresa'=>'2',
			'id_accionista'=>'1',
		]);
		DB::table('empresas_accionistas')->insert([
			'id_empresa'=>'2',
			'id_accionista'=>'2',
		]);
		DB::table('empresas_accionistas')->insert([
			'id_empresa'=>'2',
			'id_accionista'=>'3',
		]);


		DB::table('empresas_accionistas')->insert([
			'id_empresa'=>'3',
			'id_accionista'=>'1',
		]);
		DB::table('empresas_accionistas')->insert([
			'id_empresa'=>'3',
			'id_accionista'=>'4',
		]);
		DB::table('empresas_accionistas')->insert([
			'id_empresa'=>'3',
			'id_accionista'=>'5',
		]);
		DB::table('empresas_accionistas')->insert([
			'id_empresa'=>'3',
			'id_accionista'=>'6',
		]);


		DB::table('empresas_accionistas')->insert([
			'id_empresa'=>'4',
			'id_accionista'=>'1',
		]);
		DB::table('empresas_accionistas')->insert([
			'id_empresa'=>'4',
			'id_accionista'=>'7',
		]);
		DB::table('empresas_accionistas')->insert([
			'id_empresa'=>'4',
			'id_accionista'=>'8',
		]);
		

		DB::table('empresas_accionistas')->insert([
			'id_empresa'=>'5',
			'id_accionista'=>'23',
			'tipo'=>'empresa',
		]);
		DB::table('empresas_accionistas')->insert([
			'id_empresa'=>'5',
			'id_accionista'=>'24',
			'tipo'=>'empresa',
		]);
		DB::table('empresas_accionistas')->insert([
			'id_empresa'=>'5',
			'id_accionista'=>'10',
		]);
		DB::table('empresas_accionistas')->insert([
			'id_empresa'=>'5',
			'id_accionista'=>'11',
		]);


		DB::table('empresas_accionistas')->insert([
			'id_empresa'=>'6',
			'id_accionista'=>'1',
		]);
		DB::table('empresas_accionistas')->insert([
			'id_empresa'=>'6',
			'id_accionista'=>'3',
		]);
		

		DB::table('empresas_accionistas')->insert([
			'id_empresa'=>'7',
			'id_accionista'=>'1',
		]);
		DB::table('empresas_accionistas')->insert([
			'id_empresa'=>'7',
			'id_accionista'=>'2',
		]);
		

		DB::table('empresas_accionistas')->insert([
			'id_empresa'=>'8',
			'id_accionista'=>'1',
		]);
		DB::table('empresas_accionistas')->insert([
			'id_empresa'=>'8',
			'id_accionista'=>'3',
		]);
		DB::table('empresas_accionistas')->insert([
			'id_empresa'=>'8',
			'id_accionista'=>'8',
		]);


		DB::table('empresas_accionistas')->insert([
			'id_empresa'=>'9',
			'id_accionista'=>'1',
		]);
		DB::table('empresas_accionistas')->insert([
			'id_empresa'=>'9',
			'id_accionista'=>'2',
		]);


		DB::table('empresas_accionistas')->insert([
			'id_empresa'=>'10',
			'id_accionista'=>'1',
		]);
		DB::table('empresas_accionistas')->insert([
			'id_empresa'=>'10',
			'id_accionista'=>'12',
		]);


		DB::table('empresas_accionistas')->insert([
			'id_empresa'=>'11',
			'id_accionista'=>'25',
			'tipo'=>'empresa',
		]);
		DB::table('empresas_accionistas')->insert([
			'id_empresa'=>'11',
			'id_accionista'=>'1',
		]);

		DB::table('empresas_accionistas')->insert([
			'id_empresa'=>'12',
			'id_accionista'=>'1',
		]);
		DB::table('empresas_accionistas')->insert([
			'id_empresa'=>'12',
			'id_accionista'=>'2',
		]);
		DB::table('empresas_accionistas')->insert([
			'id_empresa'=>'12',
			'id_accionista'=>'3',
		]);


		DB::table('empresas_accionistas')->insert([
			'id_empresa'=>'13',
			'id_accionista'=>'14',
		]);
		DB::table('empresas_accionistas')->insert([
			'id_empresa'=>'13',
			'id_accionista'=>'15',
		]);

		DB::table('empresas_accionistas')->insert([
			'id_empresa'=>'14',
			'id_accionista'=>'13',
		]);
		DB::table('empresas_accionistas')->insert([
			'id_empresa'=>'14',
			'id_accionista'=>'7',
		]);
		DB::table('empresas_accionistas')->insert([
			'id_empresa'=>'14',
			'id_accionista'=>'16',
		]);
		
    }
}
