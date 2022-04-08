<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitudAulasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitud_aulas', function (Blueprint $table) {
            $table->id();
            $table->string('materiaSolicitud');
            $table->string('nombreDocenteSolicitud');
            $table->string('grupoMateriaSOlicitud');
            $table->string('numeroEstudiantesSolicitud');
            $table->string('motivoSOlicitud');
            $table->string('fechaSolicitud');
            $table->string('horaSolicitud');
            $table->string('estadoSolicitud');
            $table->timestamps();
        });

        DB::table('solicitud_aulas')->insert(array(
            'materiaSolicitud'=>'Elementos',
            'nombreDocenteSolicitud'=>'Leticia',
            'grupoMateriaSOlicitud'=>'1',
            'numeroEstudiantesSolicitud'=>'70',
            'motivoSOlicitud'=>'Examen de primer parcial',
            'fechaSolicitud'=>'08/04/2022',
            'horaSolicitud'=>'12:45',
            'estadoSolicitud'=>'pendiente'
        ));

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitud_aulas');
    }
}
