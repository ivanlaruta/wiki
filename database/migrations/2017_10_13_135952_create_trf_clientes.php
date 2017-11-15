<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrfClientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trf_clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ci')->nullable();
            $table->string('nombre');
            $table->string('paterno')->nullable();
            $table->string('materno')->nullable();
            $table->string('genero')->nullable();
            $table->string('rango_edad')->nullable();
            $table->string('telefono')->nullable();
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
        Schema::dropIfExists('trf_clientes');
    }
}
