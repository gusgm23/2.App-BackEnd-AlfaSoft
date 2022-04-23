<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMateriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materias', function (Blueprint $table) {
            //$table->string('id', 30)->primary();
            $table->increments('id');
            $table->string('codigoMateria');
            $table->string('nombreMateria');
            $table->string('estadoMateria');
            //$table->string('grupoMateria');
            $table->timestamps();

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->nullable()->onDelete('SET NULL');
            //$table->string('name');
            //$table->foreign('name')->references('id')->on('users')->nullable()->onDelete('SET NULL');
        });

        DB::table('materias')->insert(array(
            //'id'=>'materia-1',
            'codigoMateria'     =>'242344543',
            'nombreMateria'     =>'Introduccion a la programacion',
            'estadoMateria'     =>'Actico',
            'user_id'           =>2
            //'grupoMateria'=>'1',
            //'name'=>'user-1'
        ));

        DB::table('materias')->insert(array (
            'codigoMateria'     =>'234234643',
            'nombreMateria'     =>'Calculo I',
            'estadoMateria'     =>'Activo',
            'user_id'           =>3
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materias');
    }
}
