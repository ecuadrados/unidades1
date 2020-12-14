<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnidadGeneralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidad__generals', function (Blueprint $table) {
            $table->id();
            $table->string('general_nombre');
            $table->string('general_tipo_documento');
            $table->string('general_documento')->unique();
            $table->date('general_fecha_nacimiento');
            $table->string('general_direccion');
            $table->string('general_telefono');
            $table->string('general_nombre_acudiente');
            $table->string('general_documento_acudiente')->unique();
            $table->string('general_nuevo_beneficiario');
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
        Schema::dropIfExists('unidad__generals');
    }
}
