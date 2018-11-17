<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTutoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutorias', function (Blueprint $table) {
            $table->increments('id');
            $table->text('ayuda');
            $table->text('participacion');
            $table->text('act_retencion');
            $table->string('grupos');
            $table->text('act_reprobatoria');
            $table->text('asesorias');
            $table->string('proyectos');
            $table->integer('horas');
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
        Schema::dropIfExists('tutorias');
    }
}
