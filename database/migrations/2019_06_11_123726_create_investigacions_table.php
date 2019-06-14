<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvestigacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investigacions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo');
            $table->string('eh');
            $table->integer('fk_usuario')->nullable();
            $table->integer('fk_idea')->nullable();
            $table->timestamps('fecha_creacion');

            $table->foreign('fk_usuario')
                ->references('id')
                ->on('usuario')
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
        Schema::dropIfExists('investigacions');
    }
}
