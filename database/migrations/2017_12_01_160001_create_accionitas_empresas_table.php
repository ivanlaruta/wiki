<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccionitasEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas_accionistas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_empresa');
            $table->integer('id_accionista')->nullable();
            $table->string('tipo',50)->nullable();
            $table->integer('porcentaje')->nullable();
            $table->string('observaciones',50)->nullable();
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
        Schema::dropIfExists('empresas_accionistas');
    }
}
