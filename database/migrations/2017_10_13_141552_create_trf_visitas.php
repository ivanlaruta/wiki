<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrfVisitas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trf_visitas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo_cliente')->nullable();
            $table->string('id_sucursal');
            $table->integer('id_cliente')->nullable();
            $table->integer('id_motivo');
            $table->integer('id_ejecutivo')->nullable();
            $table->string('observaciones')->nullable();
            $table->date('fecha');
            $table->string('estado')->nullable();

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
        Schema::dropIfExists('trf_visitas');
    }
}
