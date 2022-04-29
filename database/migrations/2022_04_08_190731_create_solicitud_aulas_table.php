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
            'fechaSolicitud'                =>'22/04/2022',
            'horaInicioSolicitud'           =>'12:45',
            'periodoSolicitud'              =>'1 periodo',
            'estadoSolicitud'               =>'pendiente',
            'materiaSolicitud'              =>'Algebra I',
            'grupoSolicitud'                =>'1',
            'materia_id'                    =>1
            //'nombreMateria'                 =>'materia-1',
            //'grupoMateria'                  =>'materia-1'
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
