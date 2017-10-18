<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrfMotivoCategoria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trf_motivo_categoria', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_categoria');
            $table->string('id_motivo');
            $table->string('descripcion')->nullable();
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
        Schema::dropIfExists('trf_motivo_categoria');
    }
}
