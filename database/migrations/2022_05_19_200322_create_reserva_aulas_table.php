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
            $table->timestamps();

            $table->integer('aula_id')->unsigned();
            $table->foreing('aula_id')->references('id')->in('aulas')->nullable()->onDelete('SET NULL');
        });

        DB::table('reserva_aulas')->insert(array(
            'fechaReserva'          =>'2022-05-04',
            'horaInicioReserva'     =>'12:45',
            'horaFinalReserva'      =>'14:15',
            'aula_id'               =>1
        ));

        DB::table('reserva_aulas')->insert(array(
            'fechaReserva'          =>'2022-05-04',
            'horaInicioReserva'     =>'12:45',
            'horaFinalReserva'      =>'14:15',
            'aula_id'               =>2
        ));

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