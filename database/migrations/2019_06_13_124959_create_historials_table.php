<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistorialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historials', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('descripcion');
            $table->integer('fk_usuario')->nullable();
            $table->integer('fk_investigacion')->nullable();
            $table->timestamps('fecha_cambio');

            $table->foreign('fk_usuario')
                ->references('id')
                ->on('usuario');;

            $table->foreign('fk_investigacion')
                ->references('id')
                ->on('investigacions');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historials');
    }
}
