<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registros', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_registro');
            $table->unsignedBigInteger('administrador_id');
            $table->unsignedBigInteger('persona_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('administrador_id')->on('personas')->references('id')
                ->onDelete('cascade');
            $table->foreign('persona_id')->on('personas')->references('id')
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
        Schema::dropIfExists('registros');
    }
}
