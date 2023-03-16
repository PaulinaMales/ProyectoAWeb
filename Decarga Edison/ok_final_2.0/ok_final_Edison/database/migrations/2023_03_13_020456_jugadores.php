<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jugadors', function (Blueprint $table) {
            $table->id();
            $table->string('apellido');
            $table->tinyInteger('edad')->unsigned();
            $table->unsignedBigInteger("usuario_id")->unique();
            $table->unsignedBigInteger("equipo_team");
            $table->string('direccion');
            $table->string('celular');
            $table->string('posicion');
            $table->unsignedInteger('num_camiseta');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('usuario_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            
            $table->foreign('equipo_team')
                  ->references('id')
                  ->on('equipos')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jugadors');
    }
};
