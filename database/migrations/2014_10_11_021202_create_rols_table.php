<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rols', function (Blueprint $table) {
            //$table->string('id', 30)->primary();
            $table->increments('id');
            $table->string('rol');
            $table->string('estado');
            $table->timestamps();
        });

        DB::table('rols')->insert(array(
            //'id'=>'rol-1',
            'rol'=>'Administrador',
            'estado'=>'Activo'
        ));

        DB::table('rols')->insert(array(
            //'id'=>'rol-2',
            'rol'=>'Docente',
            'estado'=>'Activo'
        ));

        DB::table('rols')->insert(array(
            //'id'=>'rol-3',
            'rol'=>'Auxiliar',
            'estado'=>'Activo'
        ));

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rols');
    }
}
