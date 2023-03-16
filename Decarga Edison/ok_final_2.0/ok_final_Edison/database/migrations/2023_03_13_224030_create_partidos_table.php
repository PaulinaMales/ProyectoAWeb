<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partidos', function (Blueprint $table) {
            $table->id();
            $table->dateTime('fecha');
            $table->string('tipo_partido');
            $table->foreignId('equipo_local')->constrained('equipos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('equipo_visitante')->constrained('equipos')->onDelete('cascade')->onUpdate('cascade');
            $table->string('ubicacion');
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
        Schema::dropIfExists('partidos');
    }
};
