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
            $table->string('habilitacionAula');
            $table->timestamps();

            $table->integer('solicitud_id')->unsigned();
            $table->foreign('solicitud_id')->references('id')->on('solicitud_aulas')->nullable()->onDelete('SET NULL');
        });

        DB::table('aulas')->insert(array(
            'nombreAula'        =>'690A',
            'capacidadAula'     =>'50',
            'estadoAula'        =>'Libre',
            'habilitacionAula'  =>'Habilitado',
            'solicitud_id'      =>1
        ));

        DB::table('aulas')->insert(array(
            'nombreAula'        =>'691A',
            'capacidadAula'     =>'90',
            'estadoAula'        =>'Libre',
            'habilitacionAula'  =>'Habilitado',
            'solicitud_id'      =>1
        ));

        DB::table('aulas')->insert(array(
            'nombreAula'        =>'692A',
            'capacidadAula'     =>'85',
            'estadoAula'        =>'Libre',
            'habilitacionAula'  =>'Habilitado',
            'solicitud_id'      =>1
        ));

        DB::table('aulas')->insert(array(
            'nombreAula'        =>'693A',
            'capacidadAula'     =>'90',
            'estadoAula'        =>'Libre',
            'habilitacionAula'  =>'Habilitado',
            'solicitud_id'      =>1
        ));

        DB::table('aulas')->insert(array(
            'nombreAula'        =>'Auditorio',
            'capacidadAula'     =>'300',
            'estadoAula'        =>'Libre',
            'habilitacionAula'  =>'Habilitado',
            'solicitud_id'      =>1
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
