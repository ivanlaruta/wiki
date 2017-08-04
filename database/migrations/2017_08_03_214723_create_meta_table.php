<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMetaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('regional',100);
            $table->string('sucursal',100);
            $table->string('marca',100);
            $table->string('modelo_generico',100)->nullable();
            $table->string('periodo',10)->nullable();
            $table->integer('meta_unidades')->nullable();
            $table->float('meta_montos',8,2)->nullable();
            $table->integer('real_unidades')->nullable();
            $table->float('real_monto',8,2)->nullable();
            $table->string('creado_por')->nullable()->unsigned();
            $table->string('modificado_por')->nullable()->unsigned();
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
        Schema::dropIfExists('metas');
    }
}
