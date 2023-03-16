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
        Schema::create('presidentes', function (Blueprint $table) {
            $table->id();
            $table->string('apellido');
            $table->tinyInteger('edad')->unsigned();
            $table->unsignedBigInteger("usuario_id")->unique();
            $table->unsignedBigInteger("equipo_id");
            $table->string('direccion');
            $table->string('celular');
            $table->rememberToken();
            $table->timestamps();

            //OTENER LOS DATOS DE LA TABLA users

            $table->foreign('usuario_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->foreign('equipo_id')
                ->references('id')
                ->on('equipos')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('presidentes');
    }
};