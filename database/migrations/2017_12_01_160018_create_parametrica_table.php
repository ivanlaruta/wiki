<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParametricaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parametricas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tabla');
            $table->string('codigo');
            $table->string('descripcion')->nullable();
            $table->string('observaciones')->nullable();
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
        Schema::dropIfExists('parametricas');
    }
}
