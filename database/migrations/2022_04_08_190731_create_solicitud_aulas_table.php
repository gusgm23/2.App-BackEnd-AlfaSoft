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
            $table->string('cantidadEstudiantesAsignada');
            $table->string('motivoSolicitud');
            //nuevo atributo
            $table->string('motivoRechazo');
            $table->string('fechaSolicitud');
            $table->string('horaInicioSolicitud');
            $table->string('periodoSolicitud');
            $table->string('estadoSolicitud');
            $table->string('materiaSolicitud');
            $table->string('grupoSolicitud');
            $table->timestamps();

            $table->integer('materia_id')->unsigned();
            $table->foreign('materia_id')->references('id')->on('materias')->nullable()->onDelete('SET NULL');                        
        });

        DB::table('solicitud_aulas')->insert(array(
            //'id'                            =>'solicitud-1',
            'nombreDocenteSolicitud'        =>'Carla',
            'apellidoDocenteSolicitud'      =>'Salazar Serrudo',
            'numeroEstudiantesSolicitud'    =>'40',
            'cantidadEstudiantesAsignada'   =>'0',
            'motivoSolicitud'               =>'Examen Segundo Parcial',
            //nuevo atributo
            'motivoRechazo'                 =>'ninguno',
            'fechaSolicitud'                =>'2022-06-20',
            'horaInicioSolicitud'           =>'12:45:00',
            'periodoSolicitud'              =>'1',
            'estadoSolicitud'               =>'pendiente',
            'materiaSolicitud'              =>'Introduccion a la programacion',
            'grupoSolicitud'                =>'1',
            'materia_id'                    =>1
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
