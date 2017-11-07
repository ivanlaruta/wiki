<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        
        DB::table('users')->insert([
            'usuario' => 'admin',
            'password' => bcrypt('12345'),
            'email'=> 'admin@toyosa.com',
            'nombre'=> 'ADMIN',
            'paterno'=> 'PRINCIPAL',
            'id_ubicacion' =>'131C',
            'rol'=>'1',
            ]);

        DB::table('users')->insert([
            'usuario' => 'solicitante',
            'password' => bcrypt('12345'),
            'email'=> 'solicitante@toyosa.com',
            'nombre'=> 'solicitante',
            'paterno'=> 'solicitante',
            'id_ubicacion' =>'131C',
            'rol'=>'2',
            ]);

        DB::table('users')->insert([
            'usuario' => 'resp_solicitudes',
            'password' => bcrypt('12345'),
            'email'=> 'responsable_sol@toyosa.com',
            'nombre'=> 'responsable',
            'paterno'=> 'solicitudes',
            'id_ubicacion' =>'131C',
            'rol'=>'3',
            ]);

        DB::table('users')->insert([
            'usuario' => 'resp_envios',
            'password' => bcrypt('12345'),
            'email'=> 'resp_envios@toyosa.com',
            'nombre'=> 'responsable',
            'paterno'=> 'de envios',
            'id_ubicacion' =>'131C',
            'rol'=>'4',
            ]);

        DB::table('users')->insert([
            'usuario' => 'resp_almacen',
            'password' => bcrypt('12345'),
            'email'=> 'resp_almacen@toyosa.com',
            'nombre'=> 'responsable',
            'paterno'=> 'de almacen',
            'id_ubicacion' =>'131C',
            'rol'=>'5',
            ]);DB::table('users')->delete();
        
        DB::table('users')->insert([
            'usuario' => 'admin',
            'password' => bcrypt('12345'),
            'email'=> 'admin@toyosa.com',
            'nombre'=> 'ADMIN',
            'paterno'=> 'PRINCIPAL',
            'id_ubicacion' =>'131C',
            'rol'=>'1',
            ]);

        DB::table('users')->insert([
            'usuario' => 'solicitante',
            'password' => bcrypt('12345'),
            'email'=> 'solicitante@toyosa.com',
            'nombre'=> 'solicitante',
            'paterno'=> 'solicitante',
            'id_ubicacion' =>'131C',
            'rol'=>'2',
            ]);

        DB::table('users')->insert([
            'usuario' => 'resp_solicitudes',
            'password' => bcrypt('12345'),
            'email'=> 'responsable_sol@toyosa.com',
            'nombre'=> 'responsable',
            'paterno'=> 'solicitudes',
            'id_ubicacion' =>'131C',
            'rol'=>'3',
            ]);

        DB::table('users')->insert([
            'usuario' => 'resp_envios',
            'password' => bcrypt('12345'),
            'email'=> 'resp_envios@toyosa.com',
            'nombre'=> 'responsable',
            'paterno'=> 'de envios',
            'id_ubicacion' =>'131C',
            'rol'=>'4',
            ]);

        DB::table('users')->insert([
            'usuario' => 'resp_almacen',
            'password' => bcrypt('12345'),
            'email'=> 'resp_almacen@toyosa.com',
            'nombre'=> 'responsable',
            'paterno'=> 'de almacen',
            'id_ubicacion' =>'131C',
            'rol'=>'5',
            ]);

        DB::table('users')->insert([
            'usuario' => 'trafico',
            'password' => bcrypt('12345'),
            'email'=> 'trafico@toyosa.com',
            'nombre'=> 'trafico',
            'paterno'=> 'prueba',
            'id_ubicacion' =>'131C',
            'rol'=>'101',
            ]);

        DB::table('users')->insert([
            'usuario' => 'equipetrol',
            'password' => bcrypt('12345'),
            'email'=> 'trafico@toyosa.com',
            'nombre'=> 'usuario',
            'paterno'=> 'equipetrol',
            'id_ubicacion' =>'141E',
            'rol'=>'100',
            ]);

        DB::table('users')->insert([
            'usuario' => 'trespasos',
            'password' => bcrypt('12345'),
            'email'=> 'trafico@toyosa.com',
            'nombre'=> 'usuario',
            'paterno'=> 'tres pasos al frente',
            'id_ubicacion' =>'143',
            'rol'=>'100',
            ]);

        DB::table('users')->insert([
            'usuario' => 'papapaulo',
            'password' => bcrypt('12345'),
            'email'=> 'trafico@toyosa.com',
            'nombre'=> 'usuario',
            'paterno'=> 'papa paulo',
            'id_ubicacion' =>'121PP',
            'rol'=>'100',
            ]);
    }
}
