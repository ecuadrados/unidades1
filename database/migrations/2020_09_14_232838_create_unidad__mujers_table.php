<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnidadMujersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidad__mujers', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('tipo_documento');
            $table->string('documento')->unique();
            $table->date('fecha_nacimiento');
            $table->integer('edad');
            $table->string('direccion');
            $table->string('telefono');
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
        Schema::dropIfExists('unidad__mujers');
    }
}
