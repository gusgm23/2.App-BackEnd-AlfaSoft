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
            $table->string('id', 30)->primary();
            $table->string('name');
            $table->string('apellido');
            $table->string('telefonoUsuario');
            $table->string('direccionUsuario');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('estadoUsuario');
            $table->rememberToken();
            $table->timestamps();

            $table->string('rol');
            $table->foreign('rol')->references('id')->on('rols')->nullable()->onDelete('SET NULL');
        });

        DB::table('users')->insert(array(
            'id'=>'user-1',
            'name'=>'Viviana',
            'apellido'=>'Gutierrez',          
            'telefonoUsuario'=>'73443553',
            'direccionUsuario'=>'av. heroinas',
            'email'=>'viviana@gmail.com',
            'password'=>'123456',
            'estadoUsuario'=>'Activo',
            'rol'=>'rol-2' 
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
