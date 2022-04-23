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
            $table->string('estadoGrupoMateria');
            $table->timestamps();

            $table->integer('materia_id')->unsigned();
            $table->foreign('materia_id')->references('id')->on('materias')->nullable()->onDelete('SET NULL');
        });

        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'Grupo 1',
            'estadoGrupoMateria'        =>'Activo',
            'materia_id'                =>1
        ));

        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'Grupo 2',
            'estadoGrupoMateria'        =>'Activo',
            'materia_id'                =>1
        ));

        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'Grupo 3',
            'estadoGrupoMateria'        =>'Activo',
            'materia_id'                =>1
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
