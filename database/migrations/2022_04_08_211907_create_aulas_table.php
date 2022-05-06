<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAulasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aulas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombreAula');
            $table->string('capacidadAula');
            $table->string('estadoAula');
            $table->timestamps();

            $table->integer('solicitud_id')->unsigned();
            $table->foreign('solicitud_id')->references('id')->on('solicitud_aulas')->nullable()->onDelete('SET NULL');
        });

        DB::table('aulas')->insert(array(
            'nombreAula'        =>'692a',
            'capacidadAula'     =>'90',
            'estadoAula'        =>'Libre',
            'solicitud_id'      =>1
        ));

        DB::table('aulas')->insert(array(
            'nombreAula'        =>'655',
            'capacidadAula'     =>'30',
            'estadoAula'        =>'Libre',
            'solicitud_id'      =>1
        ));

        DB::table('aulas')->insert(array(
            'nombreAula'        =>'690A',
            'capacidadAula'     =>'90',
            'estadoAula'        =>'Ocupado',
            'solicitud_id'      =>2
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aulas');
    }
}
