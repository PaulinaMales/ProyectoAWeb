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
        Schema::create('goles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('resultado_id')->constrained('resultados')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('jugador_id')->constrained('jugadors')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('equipo_id')->constrained('equipos')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('gols');
    }
};
