<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cursos_id');
            $table->foreign('cursos_id')->references('id')->on('cursos');
            $table->string('nombre');
            $table->string('apellido');
            $table->integer('edad');
            $table->integer('ci');
            $table->integer('telefono');
            $table->string('direccion');
            $table->string('gmail');
            $table->string('profesion');
            $table->string('genero');
            $table->text('fechanac');
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
        Schema::dropIfExists('alumnos');
    }
}
