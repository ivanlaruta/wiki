<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ci',12)->nullable();
            $table->string('expedido',2)->nullable();
            $table->string('nit',20)->nullable();
            $table->string('nombre',50);
            $table->string('paterno',50);
            $table->string('materno',50)->nullable();
            $table->string('telefono',10)->nullable();
            $table->string('celular',12)->nullable();
            $table->string('direccion',100)->nullable();
            $table->string('correo',50)->nullable();
            $table->date('f_nacimiento')->nullable();
            $table->string('genero',1);
            $table->string('titulo',50)->nullable();
            $table->string('foto')->nullable();
            $table->enum('estado',['1','0'])->default('1');
            
            $table->string('created_by')->nullable()->unsigned();
            $table->string('updated_by')->nullable()->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personas');
    }
}
