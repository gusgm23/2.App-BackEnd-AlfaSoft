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
            $table->id();
            $table->string('nombreAula');
            $table->string('capacidadAula');
            $table->string('estadoAula');

            $table->timestamps();
        });

         DB::table('aulas')->insert(array(
            'nombreAula'=>'692a',
            'capacidadAula'=>'90',
            'estadoAula'=>'libre'
            
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
