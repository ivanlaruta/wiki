<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgendaCriticaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agenda_critica', function (Blueprint $table) 
        {
            $table->increments('id');
            $table->string('tema');
            $table->string('propuesta_comentario')->nullable();
            $table->date('fecha_creacion');
            $table->date('plazo');
            $table->string('criticidad',20)->nullable();
            $table->integer('progreso')->nullable();
            $table->string('contingencia',120)->nullable();
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
        Schema::dropIfExists('agenda_critica');
    }
}
