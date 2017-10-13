<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrfEjecutivos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trf_ejecutivos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ci');
            $table->string('nombre');
            $table->string('paterno')->nullable();
            $table->string('materno')->nullable();
            $table->string('telefono')->nullable();
            $table->string('correo')->nullable();
            $table->string('cargo')->nullable();
            $table->integer('id_sucursal');
            $table->string('estado')->nullable();

            $table->string('created_by')->nullable()->unsigned();
            $table->string('updated_by')->nullable()->unsigned();
            $table->timestamps();

            // $table->foreign('id_sucursal')->references('id')->on('trf_sucursales')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trf_ejecutivos');
    }
}
