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
            'nombreAula'        =>'Auditorio',
            'capacidadAula'     =>'300',
            'estadoAula'        =>'Libre',
            'habilitacionAula'  =>'Habilitado',
            'solicitud_id'      =>1
        ));

        DB::table('aulas')->insert(array(
            'nombreAula'        =>'690A',
            'capacidadAula'     =>'50',
            'estadoAula'        =>'Libre',
            'habilitacionAula'  =>'Habilitado',
            'solicitud_id'      =>1
        ));

        DB::table('aulas')->insert(array(
            'nombreAula'        =>'690B',
            'capacidadAula'     =>'40',
            'estadoAula'        =>'Libre',
            'habilitacionAula'  =>'Habilitado',
            'solicitud_id'      =>1
        ));

        DB::table('aulas')->insert(array(
            'nombreAula'        =>'690C',
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
            'nombreAula'        =>'691B',
            'capacidadAula'     =>'90',
            'estadoAula'        =>'Libre',
            'habilitacionAula'  =>'Habilitado',
            'solicitud_id'      =>1
        ));

        DB::table('aulas')->insert(array(
            'nombreAula'        =>'691C',
            'capacidadAula'     =>'80',
            'estadoAula'        =>'Libre',
            'habilitacionAula'  =>'Habilitado',
            'solicitud_id'      =>1
        ));

        DB::table('aulas')->insert(array(
            'nombreAula'        =>'691D',
            'capacidadAula'     =>'80',
            'estadoAula'        =>'Libre',
            'habilitacionAula'  =>'Habilitado',
            'solicitud_id'      =>1
        ));

        DB::table('aulas')->insert(array(
            'nombreAula'        =>'691E',
            'capacidadAula'     =>'100',
            'estadoAula'        =>'Libre',
            'habilitacionAula'  =>'Habilitado',
            'solicitud_id'      =>1
        ));

        DB::table('aulas')->insert(array(
            'nombreAula'        =>'691F',
            'capacidadAula'     =>'95',
            'estadoAula'        =>'Libre',
            'habilitacionAula'  =>'Habilitado',
            'solicitud_id'      =>1
        ));

        DB::table('aulas')->insert(array(
            'nombreAula'        =>'692A',
            'capacidadAula'     =>'95',
            'estadoAula'        =>'Libre',
            'habilitacionAula'  =>'Habilitado',
            'solicitud_id'      =>1
        ));

        DB::table('aulas')->insert(array(
            'nombreAula'        =>'692B',
            'capacidadAula'     =>'80',
            'estadoAula'        =>'Libre',
            'habilitacionAula'  =>'Habilitado',
            'solicitud_id'      =>1
        ));

        DB::table('aulas')->insert(array(
            'nombreAula'        =>'692C',
            'capacidadAula'     =>'90',
            'estadoAula'        =>'Libre',
            'habilitacionAula'  =>'Habilitado',
            'solicitud_id'      =>1
        ));

        DB::table('aulas')->insert(array(
            'nombreAula'        =>'692D',
            'capacidadAula'     =>'90',
            'estadoAula'        =>'Libre',
            'habilitacionAula'  =>'Habilitado',
            'solicitud_id'      =>1
        ));

        DB::table('aulas')->insert(array(
            'nombreAula'        =>'692E',
            'capacidadAula'     =>'100',
            'estadoAula'        =>'Libre',
            'habilitacionAula'  =>'Habilitado',
            'solicitud_id'      =>1
        ));

        DB::table('aulas')->insert(array(
            'nombreAula'        =>'692F',
            'capacidadAula'     =>'95',
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
            'nombreAula'        =>'693B',
            'capacidadAula'     =>'80',
            'estadoAula'        =>'Libre',
            'habilitacionAula'  =>'Habilitado',
            'solicitud_id'      =>1
        ));

        DB::table('aulas')->insert(array(
            'nombreAula'        =>'693C',
            'capacidadAula'     =>'80',
            'estadoAula'        =>'Libre',
            'habilitacionAula'  =>'Habilitado',
            'solicitud_id'      =>1
        ));

        DB::table('aulas')->insert(array(
            'nombreAula'        =>'693D',
            'capacidadAula'     =>'80',
            'estadoAula'        =>'Libre',
            'habilitacionAula'  =>'Habilitado',
            'solicitud_id'      =>1
        ));

        DB::table('aulas')->insert(array(
            'nombreAula'        =>'655',
            'capacidadAula'     =>'30',
            'estadoAula'        =>'Libre',
            'habilitacionAula'  =>'Habilitado',
            'solicitud_id'      =>1
        ));

        DB::table('aulas')->insert(array(
            'nombreAula'        =>'612',
            'capacidadAula'     =>'100',
            'estadoAula'        =>'Libre',
            'habilitacionAula'  =>'Habilitado',
            'solicitud_id'      =>1
        ));

        DB::table('aulas')->insert(array(
            'nombreAula'        =>'622',
            'capacidadAula'     =>'110',
            'estadoAula'        =>'Libre',
            'habilitacionAula'  =>'Habilitado',
            'solicitud_id'      =>1
        ));

        DB::table('aulas')->insert(array(
            'nombreAula'        =>'623',
            'capacidadAula'     =>'120',
            'estadoAula'        =>'Libre',
            'habilitacionAula'  =>'Habilitado',
            'solicitud_id'      =>1
        ));

        DB::table('aulas')->insert(array(
            'nombreAula'        =>'624',
            'capacidadAula'     =>'110',
            'estadoAula'        =>'Libre',
            'habilitacionAula'  =>'Habilitado',
            'solicitud_id'      =>1
        ));

        DB::table('aulas')->insert(array(
            'nombreAula'        =>'617',
            'capacidadAula'     =>'60',
            'estadoAula'        =>'Libre',
            'habilitacionAula'  =>'Habilitado',
            'solicitud_id'      =>1
        ));

        DB::table('aulas')->insert(array(
            'nombreAula'        =>'617B',
            'capacidadAula'     =>'65',
            'estadoAula'        =>'Libre',
            'habilitacionAula'  =>'Habilitado',
            'solicitud_id'      =>1
        ));

        DB::table('aulas')->insert(array(
            'nombreAula'        =>'617C',
            'capacidadAula'     =>'60',
            'estadoAula'        =>'Libre',
            'habilitacionAula'  =>'Habilitado',
            'solicitud_id'      =>1
        ));

        DB::table('aulas')->insert(array(
            'nombreAula'        =>'642',
            'capacidadAula'     =>'70',
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
