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
            $table->string('id', 30)->primary();
            $table->string('nombreDocenteSolicitud');
            $table->string('apellidoDocenteSolicitud');
            $table->string('numeroEstudiantesSolicitud');
            $table->string('motivoSolicitud');
            $table->string('fechaSolicitud');
            $table->string('horaInicioSolicitud');
            $table->string('horaFinSolicitud');
            $table->string('periodoSolicitud');
            $table->string('estadoSolicitud');
            $table->timestamps();

            $table->string('nombreMateria');
            $table->foreign('nombreMateria')->references('id')->on('materias')->nullable()->onDelete('SET NULL');
            $table->string('grupoMateria');
            $table->foreign('grupoMateria')->references('id')->on('materias')->nullable()->onDelete('SET NULL');
        });

        DB::table('solicitud_aulas')->insert(array(
            'id'                            =>'solicitud-1',
            'nombreDocenteSolicitud'        =>'Leticia',
            'apellidoDocenteSolicitud'      =>'Blanco Coca',
            'numeroEstudiantesSolicitud'    =>'80',
            'motivoSolicitud'               =>'Examen de primer parcial',
            'fechaSolicitud'                =>'08/04/2022',
            'horaInicioSolicitud'           =>'12:45',
            'horaFinSolicitud'              =>'14:15',
            'periodoSolicitud'              =>'1 periodo',
            'estadoSolicitud'               =>'pendiente',
            'nombreMateria'                 =>'materia-1',
            'grupoMateria'                  =>'materia-1'
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
