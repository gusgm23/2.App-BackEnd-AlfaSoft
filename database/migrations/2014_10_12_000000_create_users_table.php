<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('cargoUsuario');
            $table->string('telefonoUsuario');
            $table->string('direccionUsuario');
            $table->string('estadoUsuario');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert(array(
            'name'=>'Viviana',          
            'cargoUsuario'=>'Docente',
            'telefonoUsuario'=>'73443553',
            'direccionUsuario'=>'av. heroinas',
            'estadoUsuario'=>'habilitado',
            'email'=>'viviana@gmail.com',
            'password'=>'123456'
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
