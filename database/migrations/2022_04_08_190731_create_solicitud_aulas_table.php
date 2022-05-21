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
            //$table->string('id', 30)->primary();
            $table->increments('id');
            $table->string('nombreDocenteSolicitud');
            $table->string('apellidoDocenteSolicitud');
            $table->string('numeroEstudiantesSolicitud');
            $table->string('motivoSolicitud');
            $table->string('fechaSolicitud');
            $table->string('horaInicioSolicitud');
            $table->string('periodoSolicitud');
            $table->string('estadoSolicitud');
            $table->string('materiaSolicitud');
            $table->string('grupoSolicitud');
            $table->timestamps();

            $table->integer('materia_id')->unsigned();
            $table->foreign('materia_id')->references('id')->on('materias')->nullable()->onDelete('SET NULL');
            //$table->string('nombreMateria');
            //$table->foreign('nombreMateria')->references('id')->on('materias')->nullable()->onDelete('SET NULL');
            //$table->string('grupoMateria');
            //$table->foreign('grupoMateria')->references('id')->on('materias')->nullable()->onDelete('SET NULL');
        });

        DB::table('solicitud_aulas')->insert(array(
            //'id'                            =>'solicitud-1',
            'nombreDocenteSolicitud'        =>'Carla',
            'apellidoDocenteSolicitud'      =>'Salazar',
            'numeroEstudiantesSolicitud'    =>'40',
            'motivoSolicitud'               =>'Examen de primer parcial',
            'fechaSolicitud'                =>'2022-05-04',
            'horaInicioSolicitud'           =>'12:45',
            'periodoSolicitud'              =>'1',
            'estadoSolicitud'               =>'pendiente',
            'materiaSolicitud'              =>'Introduccion a la programacion',
            'grupoSolicitud'                =>'1',
            'materia_id'                    =>1
            //'nombreMateria'                 =>'materia-1',
            //'grupoMateria'                  =>'materia-1'
        ));

        DB::table('solicitud_aulas')->insert(array(
            'nombreDocenteSolicitud'        =>'Alfredo',
            'apellidoDocenteSolicitud'      =>'Delgadillo',
            'numeroEstudiantesSolicitud'    =>'35',
            'motivoSolicitud'               =>'Examen de primer parcial',
            'fechaSolicitud'                =>'2022-05-04',
            'horaInicioSolicitud'           =>'15:45',
            'periodoSolicitud'              =>'1',
            'estadoSolicitud'               =>'pendiente',
            'materiaSolicitud'              =>'Calculo I',
            'grupoSolicitud'                =>'1',
            'materia_id'                    =>2
        ));

        DB::table('solicitud_aulas')->insert(array(
            'nombreDocenteSolicitud'        =>'Gualberto',
            'apellidoDocenteSolicitud'      =>'Leon',
            'numeroEstudiantesSolicitud'    =>'45',
            'motivoSolicitud'               =>'Examen de segundo parcial',
            'fechaSolicitud'                =>'2022-05-21',
            'horaInicioSolicitud'           =>'18:45',
            'periodoSolicitud'              =>'1',
            'estadoSolicitud'               =>'atendido',
            'materiaSolicitud'              =>'Algebra I',
            'grupoSolicitud'                =>'3',
            'materia_id'                    =>5
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
