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
            $table->string('tipo_cliente');
            $table->integer('id_sucursal');
            $table->integer('id_cliente');
            $table->integer('id_motivo');
            $table->integer('id_ejecutivo');
            $table->string('observaciones');
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
