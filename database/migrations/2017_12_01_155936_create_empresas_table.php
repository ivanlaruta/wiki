<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',150);
            $table->string('nombre_corto',50);
            $table->string('nit',20)->nullable();
            $table->string('matricula',20)->nullable();
            $table->string('objeto',150)->nullable();
            $table->string('nat_juridica',150)->nullable();
            $table->string('ubicacion',50)->nullable();
            $table->integer('gerente');
            $table->string('telefono',15)->nullable();
            $table->string('tipo',50)->nullable();
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
        Schema::dropIfExists('empresas');
    }
}
