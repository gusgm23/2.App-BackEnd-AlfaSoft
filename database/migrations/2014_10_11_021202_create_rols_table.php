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
            $table->id();
            $table->string('rol');
            $table->string('estado');
            $table->timestamps();
        });

        DB::table('rols')->insert(array('rol'=>'Administrador'          ,'estado'=>'Activo'));
        DB::table('rols')->insert(array('rol'=>'Docente'                ,'estado'=>'Activo'));
        DB::table('rols')->insert(array('rol'=>'Auxiliar'               ,'estado'=>'Activo'));
        DB::table('rols')->insert(array('rol'=>'Prueba'                 ,'estado'=>'Inactivo'));
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
