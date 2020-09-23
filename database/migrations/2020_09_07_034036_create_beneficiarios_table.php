<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeneficiariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beneficiarios', function (Blueprint $table) {
            $table->id();
            $table->string('beneficiario_nombre');
            $table->string('beneficiario_tipo_documento');
            $table->string('beneficiario_documento')->unique();
            $table->date('beneficiario_fecha_nacimiento');
            $table->integer('beneficiario_edad');
            $table->string('beneficiario_direccion');
            $table->string('beneficiario_telefono');
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
        Schema::dropIfExists('beneficiarios');
    }
}
