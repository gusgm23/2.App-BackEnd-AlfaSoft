<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservaAulasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserva_aulas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fechaReserva');
            $table->string('horaInicioReserva');
            $table->string('horaFinalReserva');
            $table->integer('idSolicitud');
            $table->timestamps();

            $table->integer('aula_id')->unsigned();
            $table->foreign('aula_id')->references('id')->on('aulas')->nullable()->onDelete('SET NULL');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reserva_aulas');
    }
}
