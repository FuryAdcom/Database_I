<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnidadInformacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidad_informacions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('categoria');
            $table->string('cita');
            $table->string('referencia');
            $table->string('nivel');
            $table->integer('fk_unidad_info')->nullable();
            $table->integer('fk_investigacion')->nullable();
            $table->timestamps('fecha_creacion');

            $table->foreign('fk_unidad_info')
                ->references('id')
                ->on('unidad_infos')
                ->onDelete('cascade');

            $table->foreign('fk_investigacion')
                ->references('id')
                ->on('investigacions')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unidad_informacions');
    }
}
