<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGrupoMateriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupo_materias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('grupoMateria');
            $table->string('idDocente');
            $table->string('idAuxiliar');
            $table->string('estadoGrupoMateria');
            $table->timestamps();

            $table->integer('materia_id')->unsigned();
            $table->foreign('materia_id')->references('id')->on('materias')->nullable()->onDelete('SET NULL');
        });

        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'1',
            'idDocente'                 =>'3',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>1
        ));

        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'2',
            'idDocente'                 =>'4',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>1
        ));

        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'3',
            'idDocente'                 =>'4',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>2
        ));

        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'4',
            'idDocente'                 =>'3',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>2
        ));

        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'5',
            'idDocente'                 =>'2',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>3
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grupo_materias');
    }
}
