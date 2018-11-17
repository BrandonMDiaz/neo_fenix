<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informes', function (Blueprint $table) {
            $table->increments('id');
            $table->datetime('fecha');
            $table->integer('estado');
            $table->unsignedInteger('docencia_id');
            $table->foreign('docencia_id')->references('id')->on('docencias');#
            $table->unsignedInteger('investigacion_id');
            $table->foreign('investigacion_id')->references('id')->on('investigacions');#
            $table->unsignedInteger('sup_academica_id');
            $table->foreign('sup_academica_id')->references('id')->on('sup_academicas');#
            $table->unsignedInteger('tutoria_id');
            $table->foreign('tutoria_id')->references('id')->on('tutorias');#
            $table->unsignedInteger('gestion_id');
            $table->foreign('gestion_id')->references('id')->on('gestions');#
            $table->unsignedInteger('difusion_id');
            $table->foreign('difusion_id')->references('id')->on('difusions');#
            $table->unsignedInteger('comentario_id');
            $table->foreign('comentario_id')->references('id')->on('comentarios');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');#
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
        Schema::dropIfExists('informes');
    }
}
