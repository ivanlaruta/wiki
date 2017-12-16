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
		'id_persona'=>'23',
		'id_area'=>'1',
		]);
		DB::table('responsables')->insert([
		'id_persona'=>'24',
		'id_area'=>'2',
		]);
		DB::table('responsables')->insert([
		'id_persona'=>'25',
		'id_area'=>'3',
		]);
		DB::table('responsables')->insert([
		'id_persona'=>'26',
		'id_area'=>'4',
		]);
		DB::table('responsables')->insert([
		'id_persona'=>'27',
		'id_area'=>'5',
		]);
		DB::table('responsables')->insert([
		'id_persona'=>'28',
		'id_area'=>'6',
		]);
		DB::table('responsables')->insert([
		'id_persona'=>'29',
		'id_area'=>'7',
		]);
    }
}
