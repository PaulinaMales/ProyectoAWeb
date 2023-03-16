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
        //

        Schema::create('sanciones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jugador_id')->nullable()->constrained('jugadors')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('equipo_id')->nullable()->constrained('equipos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('presidente_id')->nullable()->constrained('presidentes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('partido_id')->nullable()->constrained('partidos')->onDelete('cascade')->onUpdate('cascade');
            $table->string('descripcion')->nullable(); //motivo
            $table->string('tipo_sancion')->nullable(); //tarjeta: amarilla, roja, etc
            $table->string('gravedad_sancion')->nullable(); //leve, grave, muy grave
            $table->boolean('sancion_cumplida')->default(false)->nullable();
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
        //
    }
};
