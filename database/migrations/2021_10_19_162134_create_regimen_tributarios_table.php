<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegimenTributariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regimen_tributarios', function (Blueprint $table) {
            $table->id();
            $table->string('cai');
            $table->integer('correlativo_inicial');
            $table->integer('correlativo_final');
            $table->dateTime('fecha_vencimiento');
            $table->integer('numero_relativo');
            $table->integer('ultimo_correlativo');
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
        Schema::dropIfExists('regimen_tributarios');
    }
}
