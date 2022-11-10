<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicacions', function (Blueprint $table) {
            $table->id();
            $table->string('titulo',120);
            $table->string('descripcion',250);
            $table->string('autor',50);
            $table->string('foto',250);// Archivo de Imagen
            $table->string('portada',250);// Archivo de Imagen
            $table->string('file',250);// Archivo PDF
            $table->integer('activo');
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
        Schema::dropIfExists('publicacions');
    }
}
