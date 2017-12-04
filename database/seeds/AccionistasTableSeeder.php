<?php

use Illuminate\Database\Seeder;

class AccionistasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accionistas')->delete();
        
		DB::table('accionistas')->insert([
			'id'=>'1',
			'representante'=>'1',
		]);

		DB::table('accionistas')->insert([
			'id'=>'2',
			'representante'=>'2',
		]);

		DB::table('accionistas')->insert([
			'id'=>'3',
			'representante'=>'3',
		]);

		DB::table('accionistas')->insert([
			'id'=>'4',
			'representante'=>'4',
		]);

		DB::table('accionistas')->insert([
			'id'=>'5',
			'representante'=>'5',
		]);

		DB::table('accionistas')->insert([
			'id'=>'6',
			'representante'=>'6',
		]);

		DB::table('accionistas')->insert([
			'id'=>'7',
			'representante'=>'7',
		]);

		DB::table('accionistas')->insert([
			'id'=>'8',
			'representante'=>'8',
		]);

		DB::table('accionistas')->insert([
			'id'=>'9',
			'representante'=>'9',
		]);

		DB::table('accionistas')->insert([
			'id'=>'10',
			'representante'=>'10',
		]);

		DB::table('accionistas')->insert([
			'id'=>'11',
			'representante'=>'11',
		]);

		DB::table('accionistas')->insert([
			'id'=>'12',
			'representante'=>'12',
		]);

		DB::table('accionistas')->insert([
			'id'=>'13',
			'representante'=>'13',
		]);

		DB::table('accionistas')->insert([
			'id'=>'14',
			'representante'=>'14',
		]);

		DB::table('accionistas')->insert([
			'id'=>'15',
			'representante'=>'15',
		]);

		DB::table('accionistas')->insert([
			'id'=>'16',
			'representante'=>'16',
		]);

		DB::table('accionistas')->insert([
			'id'=>'17',
			'representante'=>'17',
		]);

		DB::table('accionistas')->insert([
			'id'=>'18',
			'representante'=>'18',
		]);

		DB::table('accionistas')->insert([
			'id'=>'19',
			'representante'=>'19',
		]);

		DB::table('accionistas')->insert([
			'id'=>'20',
			'representante'=>'20',
		]);

		DB::table('accionistas')->insert([
			'id'=>'21',
			'representante'=>'21',
		]);

		DB::table('accionistas')->insert([
			'id'=>'22',
			'representante'=>'22',
		]);


		DB::table('accionistas')->insert([
			'id'=>'23',
			'representante'=>'9',
			'empresa'=>'DIMENSIÓN ENASA LTDA.',
			'tipo'=>'empresa',
		]);

		DB::table('accionistas')->insert([
			'id'=>'24',
			'representante'=>'1',
			'empresa'=>'CONCORDIA S.A. EMPRESA CONSTRUCTORA',
			'tipo'=>'empresa',
		]);

		DB::table('accionistas')->insert([
			'id'=>'25',
			'representante'=>'23',
			'empresa'=>'TELSIS TRADING GROUP LLC',
			'tipo'=>'empresa',
		]);

    }
}
