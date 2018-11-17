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
            $table->increments('id');
            $table->unsignedInteger('linea_id'); //foranea
            $table->text('proyectos');
            $table->text('actividades');
            $table->text('otras_act');
            $table->double('avance_1');
            $table->double('avance_2');
            $table->double('avance_3');
            $table->double('avance_4');
            $table->double('avance_5');
            $table->foreign('linea_id')->references('id')->on('linea_de_investigacions');
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
        Schema::dropIfExists('investigacions');
    }
}
