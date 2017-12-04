<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccionistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accionistas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('representante');
            $table->string('empresa',100)->nullable();
            $table->string('tipo',20)->nullable();
            $table->string('observaciones',120)->nullable();
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
        Schema::dropIfExists('accionistas');
    }
}
