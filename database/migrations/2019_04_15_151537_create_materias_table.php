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
            $table->string('id', 30)->primary();
            $table->string('nombreMateria');
            $table->string('grupoMateria');
            $table->string('codigoMateria');
            $table->timestamps();

            $table->string('name');
            $table->foreign('name')->references('id')->on('users')->nullable()->onDelete('SET NULL');
        });

        DB::table('materias')->insert(array(
            'id'=>'materia-1',
            'nombreMateria'=>'Elementos de programacion y estructura de datos',
            'grupoMateria'=>'1',
            'codigoMateria'=>'242344',
            'name'=>'user-1'
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
