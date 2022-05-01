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
            //$table->string('id', 30)->primary();
            $table->increments('id');
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

            $table->integer('rol_id')->unsigned();
            $table->foreign('rol_id')->references('id')->on('rols')->nullable()->onDelete('SET NULL');
            //$table->string('rol');
            //$table->foreign('rol')->references('id')->on('rols')->nullable()->onDelete('SET NULL');
        });

        DB::table('users')->insert(array(
            'name'=>                'Alfa',
            'apellido'=>            'Soft',
            'telefonoUsuario'=>     '77483376',
            'direccionUsuario'=>    'Av. Ayachuco',
            'email'=>               'alfasoft@gmail.com',
            'password'=>            '123456',
            'estadoUsuario'=>       'Activo',
            'rol_id'=>              1
        ));

        DB::table('users')->insert(array(
            //'id'=>'user-1',
            'name'=>                'Corina',
            'apellido'=>            'Flores',          
            'telefonoUsuario'=>     '73443553',
            'direccionUsuario'=>    'av. heroinas',
            'email'=>               'corina@gmail.com',
            'password'=>            '123456',
            'estadoUsuario'=>       'Activo',
            'rol_id'=>              2
        ));

        DB::table('users')->insert(array(
            'name'=>                'Carla',
            'apellido'=>            'Salazar',
            'telefonoUsuario'=>     '77384564',
            'direccionUsuario'=>    'Av. Panamericana',
            'email'=>               'carla@gmail.com',
            'password'=>            '123456',
            'estadoUsuario'=>       'Activo',
            'rol_id'=>              2
        ));

        DB::table('users')->insert(array(
            'name'=>                'Maria Benita',
            'apellido'=>            'Cespedes Guizada',
            'telefonoUsuario'=>     '70345435',
            'direccionUsuario'=>    'Av. Blanco Galindo',
            'email'=>               'benita@gmail.com',
            'password'=>            '123456',
            'estadoUsuario'=>       'Activo',
            'rol_id'=>              2
        ));

        DB::table('users')->insert(array(
            'name'=>                'Cecilia Beatriz',
            'apellido'=>            'Castro Lazarte',
            'telefonoUsuario'=>     '76566321',
            'direccionUsuario'=>    'Av. Petrolera',
            'email'=>               'cecilia@gmail.com',
            'password'=>            '123456',
            'estadoUsuario'=>       'Activo',
            'rol_id'=>              2
        ));

        DB::table('users')->insert(array(
            'name'=>                'Gualberto',
            'apellido'=>            'Leon Romero',
            'telefonoUsuario'=>     '67355322',
            'direccionUsuario'=>    'C. Mostajo y Mandilla',
            'email'=>               'gualberto@gmail.com',
            'password'=>            '123456',
            'estadoUsuario'=>       'Activo',
            'rol_id'=>              2
        ));

        DB::table('users')->insert(array(
            'name'=>                'Demetrio',
            'apellido'=>            'Juchani Bazualdo',
            'telefonoUsuario'=>     '77584950',
            'direccionUsuario'=>    'Av. Ecologica',
            'email'=>               'Demetrio@gmail.com',
            'password'=>            '123456',
            'estadoUsuario'=>       'Activo',
            'rol_id'=>              2
        ));

        DB::table('users')->insert(array(
            'name'=>                'Patricia',
            'apellido'=>            'Romero Rodriguez',
            'telefonoUsuario'=>     '67377483',
            'direccionUsuario'=>    'Av. Villazon',
            'email'=>               'patricia@gmail.com',
            'password'=>            '123456',
            'estadoUsuario'=>       'Activo',
            'rol_id'=>              2
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
