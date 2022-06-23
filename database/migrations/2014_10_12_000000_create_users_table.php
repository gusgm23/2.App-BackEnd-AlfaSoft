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
            $table->string('repeatPassword');
            $table->string('estadoUsuario');
            $table->string('cargoUsuario');
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
            'email'=>               'alfasoft@fcyt.umss.edu.bo',
            'password'=>            '123456',
            'repeatPassword'=>      '123456',
            'estadoUsuario'=>       'Habilitado',
            'cargoUsuario'=>        'Administrador',
            'rol_id'=>              1
        ));

        DB::table('users')->insert(array(
            //'id'=>'user-1',
            'name'=>                'Jose Richard',
            'apellido'=>            'Ayoroa Cardozo',          
            'telefonoUsuario'=>     '73443553',
            'direccionUsuario'=>    'av. heroinas',
            'email'=>               'joserichard@fcyt.umss.edu.bo',
            'password'=>            '123456',
            'repeatPassword'=>      '123456',
            'estadoUsuario'=>       'Habilitado',
            'cargoUsuario'=>        'Docente',
            'rol_id'=>              2
        ));

        DB::table('users')->insert(array(
            'name'=>                'Boris Marcelo',
            'apellido'=>            'Calancha Navia',
            'telefonoUsuario'=>     '77384564',
            'direccionUsuario'=>    'Av. Panamericana',
            'email'=>               'borismarcelo@fcyt.umss.edu.bo',
            'password'=>            '123456',
            'repeatPassword'=>      '123456',
            'estadoUsuario'=>       'Habilitado',
            'cargoUsuario'=>        'Docente',
            'rol_id'=>              2
        ));

        DB::table('users')->insert(array(
            'name'=>                'Vladimir',
            'apellido'=>            'Costas Jáuregui',
            'telefonoUsuario'=>     '70345435',
            'direccionUsuario'=>    'Av. Blanco Galindo',
            'email'=>               'vladimir@fcyt.umss.edu.bo',
            'password'=>            '123456',
            'repeatPassword'=>      '123456',
            'estadoUsuario'=>       'Habilitado',
            'cargoUsuario'=>        'Docente',
            'rol_id'=>              2
        ));

        DB::table('users')->insert(array(
            'name'=>                'David',
            'apellido'=>            'Escalera Fernandez',
            'telefonoUsuario'=>     '76566321',
            'direccionUsuario'=>    'Av. Petrolera',
            'email'=>               'david@fcyt.umss.edu.bo',
            'password'=>            '123456',
            'repeatPassword'=>      '123456',
            'estadoUsuario'=>       'Habilitado',
            'cargoUsuario'=>        'Docente',
            'rol_id'=>              2
        ));

        DB::table('users')->insert(array(
            'name'=>                'Rolando',
            'apellido'=>            'Jaldin Rosales',
            'telefonoUsuario'=>     '67355322',
            'direccionUsuario'=>    'C. Mostajo y Mandilla',
            'email'=>               'rolando@fcyt.umss.edu.bo',
            'password'=>            '123456',
            'repeatPassword'=>      '123456',
            'estadoUsuario'=>       'Habilitado',
            'cargoUsuario'=>        'Docente',
            'rol_id'=>              2
        ));

        DB::table('users')->insert(array(
            'name'=>                'Jorge Walter',
            'apellido'=>            'Orellana Araoz',
            'telefonoUsuario'=>     '77584950',
            'direccionUsuario'=>    'Av. Ecologica',
            'email'=>               'jorgewalter@fcyt.umss.edu.bo',
            'password'=>            '123456',
            'repeatPassword'=>      '123456',
            'estadoUsuario'=>       'Habilitado',
            'cargoUsuario'=>        'Docente',
            'rol_id'=>              2
        ));

        DB::table('users')->insert(array(
            'name'=>                'Patricia Elizabeth',
            'apellido'=>            'Romero Rodriguez',
            'telefonoUsuario'=>     '67377483',
            'direccionUsuario'=>    'Av. Villazon',
            'email'=>               'patriciaelizabeth@fcyt.umss.edu.bo',
            'password'=>            '123456',
            'repeatPassword'=>      '123456',
            'estadoUsuario'=>       'Habilitado',
            'cargoUsuario'=>        'Docente',
            'rol_id'=>              2
        ));

        DB::table('users')->insert(array(
            'name'=>                'Jimmy',
            'apellido'=>            'Villarroel Novillo',
            'telefonoUsuario'=>     '77432433',
            'direccionUsuario'=>    'Av. Simon Lopez',
            'email'=>               'jimmy@fcyt.umss.edu.bo',
            'password'=>            '123456',
            'repeatPassword'=>      '123456',
            'estadoUsuario'=>       'Habilitado',
            'cargoUsuario'=>        'Docente',
            'rol_id'=>              2
        ));

        DB::table('users')->insert(array(
            'name'=>                'Henrry Frank',
            'apellido'=>            'Villarroel Tapia',
            'telefonoUsuario'=>     '6532322',
            'direccionUsuario'=>    'Zona cerro grande',
            'email'=>               'henrryfrank@fcyt.umss.edu.bo',
            'password'=>            '123456',
            'repeatPassword'=>      '123456',
            'estadoUsuario'=>       'Habilitado',
            'cargoUsuario'=>        'Docente',
            'rol_id'=>              2
        ));

        DB::table('users')->insert(array(
            'name'=>                'Samuel Roberto',
            'apellido'=>            'Acha Perez',
            'telefonoUsuario'=>     '67755432',
            'direccionUsuario'=>    'Av. Panamericana',
            'email'=>               'samuelroberto@fcyt.umss.edu.bo',
            'password'=>            '123456',
            'repeatPassword'=>      '123456',
            'estadoUsuario'=>       'Habilitado',
            'cargoUsuario'=>        'Docente',
            'rol_id'=>              2
        ));

        DB::table('users')->insert(array(
            'name'=>                'Marcelo',
            'apellido'=>            'Antezana Camacho',
            'telefonoUsuario'=>     '75443219',
            'direccionUsuario'=>    'AV. 6 de Agosto',
            'email'=>               'marcelo@fcyt.umss.edu.bo',
            'password'=>            '123456',
            'repeatPassword'=>      '123456',
            'estadoUsuario'=>       'Habilitado',
            'cargoUsuario'=>        'Docente',
            'rol_id'=>              2
        ));

        DB::table('users')->insert(array(
            'name'=>                'Nancy Tatiana',
            'apellido'=>            'Aparicio Yuja',
            'telefonoUsuario'=>     '77685948',
            'direccionUsuario'=>    'Zona la Chimba',
            'email'=>               'nancytatiana@fcyt.umss.edu.bo',
            'password'=>            '123456',
            'repeatPassword'=>      '123456',
            'estadoUsuario'=>       'Habilitado',
            'cargoUsuario'=>        'Docente',
            'rol_id'=>              2
        ));

        DB::table('users')->insert(array(
            'name'=>                'Ligia Jacqueline',
            'apellido'=>            'Aranibar La Fuente',
            'telefonoUsuario'=>     '67483328',
            'direccionUsuario'=>    'Av. Blanco Galindo km2',
            'email'=>               'ligiajacqueline@fcyt.umss.edu.bo',
            'password'=>            '123456',
            'repeatPassword'=>      '123456',
            'estadoUsuario'=>       'Habilitado',
            'cargoUsuario'=>        'Docente',
            'rol_id'=>              2
        ));

        DB::table('users')->insert(array(
            'name'=>                'Walter',
            'apellido'=>            'Arispe Santander',
            'telefonoUsuario'=>     '78548857',
            'direccionUsuario'=>    'Calle las Lomas',
            'email'=>               'walter@fcyt.umss.edu.bo',
            'password'=>            '123456',
            'repeatPassword'=>      '123456',
            'estadoUsuario'=>       'Habilitado',
            'cargoUsuario'=>        'Docente',
            'rol_id'=>              2
        ));

        DB::table('users')->insert(array(
            'name'=>                'Pablo Ramon',
            'apellido'=>            'Azero Alcocer',
            'telefonoUsuario'=>     '66574882',
            'direccionUsuario'=>    'Av. Circunvalacion',
            'email'=>               'pabloramon@fcyt.umss.edu.bo',
            'password'=>            '123456',
            'repeatPassword'=>      '123456',
            'estadoUsuario'=>       'Habilitado',
            'cargoUsuario'=>        'Docente',
            'rol_id'=>              2
        ));
             
        DB::table('users')->insert(array(
            'name'=>                'Maria Leticia',
            'apellido'=>            'Blanco Coca',
            'telefonoUsuario'=>     '76455190',
            'direccionUsuario'=>    'Av. Ballivian',
            'email'=>               'marialeticia@fcyt.umss.edu.bo',
            'password'=>            '123456',
            'repeatPassword'=>      '123456',
            'estadoUsuario'=>       'Habilitado',
            'cargoUsuario'=>        'Docente',
            'rol_id'=>              2
        ));
            
        DB::table('users')->insert(array(
            'name'=>                'Alex Israel',
            'apellido'=>            'Bustillos Vargas',
            'telefonoUsuario'=>     '67440917',
            'direccionUsuario'=>    'Av. Libertador',
            'email'=>               'alexisrael@fcyt.umss.edu.bo',
            'password'=>            '123456',
            'repeatPassword'=>      '123456',
            'estadoUsuario'=>       'Habilitado',
            'cargoUsuario'=>        'Docente',
            'rol_id'=>              2
        ));
               
        DB::table('users')->insert(array(
            'name'=>                'Indira Elva',
            'apellido'=>            'Camacho del Castillo',
            'telefonoUsuario'=>     '67443090',
            'direccionUsuario'=>    'Zona Norte Termporal',
            'email'=>               'indiraelva@fcyt.umss.edu.bo',
            'password'=>            '123456',
            'repeatPassword'=>      '123456',
            'estadoUsuario'=>       'Habilitado',
            'cargoUsuario'=>        'Docente',
            'rol_id'=>              2
        ));
                
        DB::table('users')->insert(array(
            'name'=>                'Alvaro Hernando',
            'apellido'=>            'Carrasco Calvo',
            'telefonoUsuario'=>     '66351900',
            'direccionUsuario'=>    'Zona Sud',
            'email'=>               'alvarohernando@fcyt.umss.edu.bo',
            'password'=>            '123456',
            'repeatPassword'=>      '123456',
            'estadoUsuario'=>       'Habilitado',
            'cargoUsuario'=>        'Docente',
            'rol_id'=>              2
        ));
               
        DB::table('users')->insert(array(
            'name'=>                'Cecilia Beatriz',
            'apellido'=>            'Castro Lazarte',
            'telefonoUsuario'=>     '67442182',
            'direccionUsuario'=>    'Av. Ayacucho',
            'email'=>               'ceciliabeatriz@fcyt.umss.edu.bo',
            'password'=>            '123456',
            'repeatPassword'=>      '123456',
            'estadoUsuario'=>       'Habilitado',
            'cargoUsuario'=>        'Docente',
            'rol_id'=>              2
        ));
                
        DB::table('users')->insert(array(
            'name'=>                'Raul',
            'apellido'=>            'Catari Rios',
            'telefonoUsuario'=>     '66481190',
            'direccionUsuario'=>    'Zona Oeste',
            'email'=>               'raul@fcyt.umss.edu.bo',
            'password'=>            '123456',
            'repeatPassword'=>      '123456',
            'estadoUsuario'=>       'Habilitado',
            'cargoUsuario'=>        'Docente',
            'rol_id'=>              2
        ));
                
        DB::table('users')->insert(array(
            'name'=>                'Maria Benita',
            'apellido'=>            'Cespedes Guizada',
            'telefonoUsuario'=>     '77483900',
            'direccionUsuario'=>    'Av. Villazon',
            'email'=>               'mariabenita@fcyt.umss.edu.bo',
            'password'=>            '123456',
            'repeatPassword'=>      '123456',
            'estadoUsuario'=>       'Habilitado',
            'cargoUsuario'=>        'Docente',
            'rol_id'=>              2
        ));
                
        DB::table('users')->insert(array(
            'name'=>                'Nicolas Grover',
            'apellido'=>            'Cussi',
            'telefonoUsuario'=>     '76410928',
            'direccionUsuario'=>    'Zona Norte',
            'email'=>               'nicolasgrover@fcyt.umss.edu.bo',
            'password'=>            '123456',
            'repeatPassword'=>      '123456',
            'estadoUsuario'=>       'Habilitado',
            'cargoUsuario'=>        'Docente',
            'rol_id'=>              2
        ));
                
        DB::table('users')->insert(array(
            'name'=>                'David Alfredo',
            'apellido'=>            'Delgadillo Cossio',
            'telefonoUsuario'=>     '71532890',
            'direccionUsuario'=>    'Zona Este',
            'email'=>               'davidalfredo@fcyt.umss.edu.bo',
            'password'=>            '123456',
            'repeatPassword'=>      '123456',
            'estadoUsuario'=>       'Habilitado',
            'cargoUsuario'=>        'Docente',
            'rol_id'=>              2
        ));
            
        DB::table('users')->insert(array(
            'name'=>                'Helder Octavio',
            'apellido'=>            'Fernandez Guzman',
            'telefonoUsuario'=>     '63277822',
            'direccionUsuario'=>    'Zona Sud',
            'email'=>               'helderoctavio@fcyt.umss.edu.bo',
            'password'=>            '123456',
            'repeatPassword'=>      '123456',
            'estadoUsuario'=>       'Habilitado',
            'cargoUsuario'=>        'Docente',
            'rol_id'=>              2
        ));
                
        DB::table('users')->insert(array(
            'name'=>                'David',
            'apellido'=>            'Fernandez Ramos',
            'telefonoUsuario'=>     '77640902',
            'direccionUsuario'=>    'Zona Norte',
            'email'=>               'davidfernandez@fcyt.umss.edu.bo',
            'password'=>            '123456',
            'repeatPassword'=>      '123456',
            'estadoUsuario'=>       'Habilitado',
            'cargoUsuario'=>        'Docente',
            'rol_id'=>              2
        ));
                
        DB::table('users')->insert(array(
            'name'=>                'Americo',
            'apellido'=>            'Fiorilo Lozada',
            'telefonoUsuario'=>     '67448399',
            'direccionUsuario'=>    'Calle juan de la rosa',
            'email'=>               'americo@fcyt.umss.edu.bo',
            'password'=>            '123456',
            'repeatPassword'=>      '123456',
            'estadoUsuario'=>       'Habilitado',
            'cargoUsuario'=>        'Docente',
            'rol_id'=>              2
        ));
                
        DB::table('users')->insert(array(
            'name'=>                'Juan Marcelo',
            'apellido'=>            'Flores Soliz',
            'telefonoUsuario'=>     '66473332',
            'direccionUsuario'=>    'Zona Norte',
            'email'=>               'juanmarcelo@fcyt.umss.edu.bo',
            'password'=>            '123456',
            'repeatPassword'=>      '123456',
            'estadoUsuario'=>       'Habilitado',
            'cargoUsuario'=>        'Docente',
            'rol_id'=>              2
        ));
                
        DB::table('users')->insert(array(
            'name'=>                'Corina Justina',
            'apellido'=>            'Flores Villarroel',
            'telefonoUsuario'=>     '73643890',
            'direccionUsuario'=>    'Av. Villazon',
            'email'=>               'corinajustina@fcyt.umss.edu.bo',
            'password'=>            '123456',
            'repeatPassword'=>      '123456',
            'estadoUsuario'=>       'Habilitado',
            'cargoUsuario'=>        'Docente',
            'rol_id'=>              2
        ));
                
        DB::table('users')->insert(array(
            'name'=>                'Juan Ruben',
            'apellido'=>            'Garcia Molina',
            'telefonoUsuario'=>     '67748392',
            'direccionUsuario'=>    'Zona Sud',
            'email'=>               'juanruben@fcyt.umss.edu.bo',
            'password'=>            '123456',
            'repeatPassword'=>      '123456',
            'estadoUsuario'=>       'Habilitado',
            'cargoUsuario'=>        'Docente',
            'rol_id'=>              2
        ));
                
        DB::table('users')->insert(array(
            'name'=>                'Carmen Rosa',
            'apellido'=>            'Garcia Perez',
            'telefonoUsuario'=>     '77483889',
            'direccionUsuario'=>    'Av. Ecologica',
            'email'=>               'carmenrosa@fcyt.umss.edu.bo',
            'password'=>            '123456',
            'repeatPassword'=>      '123456',
            'estadoUsuario'=>       'Habilitado',
            'cargoUsuario'=>        'Docente',
            'rol_id'=>              2
        ));
                
        DB::table('users')->insert(array(
            'name'=>                'Maria Estela',
            'apellido'=>            'Grilo Salvatierra',
            'telefonoUsuario'=>     '76859940',
            'direccionUsuario'=>    'Zona Norte',
            'email'=>               'mariaestela@fcyt.umss.edu.bo',
            'password'=>            '123456',
            'repeatPassword'=>      '123456',
            'estadoUsuario'=>       'Habilitado',
            'cargoUsuario'=>        'Docente',
            'rol_id'=>              2
        ));
                
        DB::table('users')->insert(array(
            'name'=>                'Osvaldo Walter',
            'apellido'=>            'Gutierrez Andrade',
            'telefonoUsuario'=>     '67748389',
            'direccionUsuario'=>    'Zona Oeste',
            'email'=>               'osvaldowalter@fcyt.umss.edu.bo',
            'password'=>            '123456',
            'repeatPassword'=>      '123456',
            'estadoUsuario'=>       'Habilitado',
            'cargoUsuario'=>        'Docente',
            'rol_id'=>              2
        ));
                
        DB::table('users')->insert(array(
            'name'=>                'Gonzalo Antonio',
            'apellido'=>            'Guzman Orellana',
            'telefonoUsuario'=>     '67748396',
            'direccionUsuario'=>    'Zona Norte',
            'email'=>               'gonzaloantonio@fcyt.umss.edu.bo',
            'password'=>            '123456',
            'repeatPassword'=>      '123456',
            'estadoUsuario'=>       'Habilitado',
            'cargoUsuario'=>        'Docente',
            'rol_id'=>              2
        ));
                
        DB::table('users')->insert(array(
            'name'=>                'Demetrio',
            'apellido'=>            'Juchani Bazualdo',
            'telefonoUsuario'=>     '67748210',
            'direccionUsuario'=>    'Zona Sud',
            'email'=>               'demetrio@fcyt.umss.edu.bo',
            'password'=>            '123456',
            'repeatPassword'=>      '123456',
            'estadoUsuario'=>       'Habilitado',
            'cargoUsuario'=>        'Docente',
            'rol_id'=>              2
        ));
                
        DB::table('users')->insert(array(
            'name'=>                'Valentin',
            'apellido'=>            'Laime Zapata',
            'telefonoUsuario'=>     '66471098',
            'direccionUsuario'=>    'Zona Chilimarca',
            'email'=>               'valentin@fcyt.umss.edu.bo',
            'password'=>            '123456',
            'repeatPassword'=>      '123456',
            'estadoUsuario'=>       'Habilitado',
            'cargoUsuario'=>        'Docente',
            'rol_id'=>              2
        ));
                
        DB::table('users')->insert(array(
            'name'=>                'Gualberto',
            'apellido'=>            'Leon Romero',
            'telefonoUsuario'=>     '77483990',
            'direccionUsuario'=>    'Zona Sud',
            'email'=>               'gualberto@fcyt.umss.edu.bo',
            'password'=>            '123456',
            'repeatPassword'=>      '123456',
            'estadoUsuario'=>       'Habilitado',
            'cargoUsuario'=>        'Docente',
            'rol_id'=>              2
        ));
                
        DB::table('users')->insert(array(
            'name'=>                'Marcelo Javier',
            'apellido'=>            'Lucano Lucano',
            'telefonoUsuario'=>     '65438290',
            'direccionUsuario'=>    'Zona Norte',
            'email'=>               'marcelojavier@fcyt.umss.edu.bo',
            'password'=>            '123456',
            'repeatPassword'=>      '123456',
            'estadoUsuario'=>       'Habilitado',
            'cargoUsuario'=>        'Docente',
            'rol_id'=>              2
        ));
                
        DB::table('users')->insert(array(
            'name'=>                'Roberto Juan',
            'apellido'=>            'Manchego Castellon',
            'telefonoUsuario'=>     '77382990',
            'direccionUsuario'=>    'Zona Oeste',
            'email'=>               'robertojuan@fcyt.umss.edu.bo',
            'password'=>            '123456',
            'repeatPassword'=>      '123456',
            'estadoUsuario'=>       'Habilitado',
            'cargoUsuario'=>        'Docente',
            'rol_id'=>              2
        ));
                
        DB::table('users')->insert(array(
            'name'=>                'Carlos Benito',
            'apellido'=>            'Manzur Soria',
            'telefonoUsuario'=>     '77483992',
            'direccionUsuario'=>    'Zona La Chimba',
            'email'=>               'carlosbenito@fcyt.umss.edu.bo',
            'password'=>            '123456',
            'repeatPassword'=>      '123456',
            'estadoUsuario'=>       'Habilitado',
            'cargoUsuario'=>        'Docente',
            'rol_id'=>              2
        ));
                
        DB::table('users')->insert(array(
            'name'=>                'Amilcar Saul',
            'apellido'=>            'Martinez Maida',
            'telefonoUsuario'=>     '66548399',
            'direccionUsuario'=>    'Zona Este',
            'email'=>               'amilcarsaul@fcyt.umss.edu.bo',
            'password'=>            '123456',
            'repeatPassword'=>      '123456',
            'estadoUsuario'=>       'Habilitado',
            'cargoUsuario'=>        'Docente',
            'rol_id'=>              2
        ));
                
        DB::table('users')->insert(array(
            'name'=>                'Julio',
            'apellido'=>            'Medina Gamboa',
            'telefonoUsuario'=>     '66483889',
            'direccionUsuario'=>    'Zona Oeste',
            'email'=>               'julio@fcyt.umss.edu.bo',
            'password'=>            '123456',
            'repeatPassword'=>      '123456',
            'estadoUsuario'=>       'Habilitado',
            'cargoUsuario'=>        'Docente',
            'rol_id'=>              2
        ));
                
        DB::table('users')->insert(array(
            'name'=>                'Victor R.',
            'apellido'=>            'Mejia Urquieta',
            'telefonoUsuario'=>     '76433281',
            'direccionUsuario'=>    'Zona Sud',
            'email'=>               'victorr@fcyt.umss.edu.bo',
            'password'=>            '123456',
            'repeatPassword'=>      '123456',
            'estadoUsuario'=>       'Habilitado',
            'cargoUsuario'=>        'Docente',
            'rol_id'=>              2
        ));
                
        DB::table('users')->insert(array(
            'name'=>                'Victor Hugo',
            'apellido'=>            'Montaño Quiroga',
            'telefonoUsuario'=>     '66573890',
            'direccionUsuario'=>    'Zona Sud',
            'email'=>               'victorhugo@fcyt.umss.edu.bo',
            'password'=>            '123456',
            'repeatPassword'=>      '123456',
            'estadoUsuario'=>       'Habilitado',
            'cargoUsuario'=>        'Docente',
            'rol_id'=>              2
        ));
                
        DB::table('users')->insert(array(
            'name'=>                'Marco Antonio',
            'apellido'=>            'Montecinos Choque',
            'telefonoUsuario'=>     '77483992',
            'direccionUsuario'=>    'Zona Este',
            'email'=>               'marcoantonio@fcyt.umss.edu.bo',
            'password'=>            '123456',
            'repeatPassword'=>      '123456',
            'estadoUsuario'=>       'Habilitado',
            'cargoUsuario'=>        'Docente',
            'rol_id'=>              2
        ));
                
        DB::table('users')->insert(array(
            'name'=>                'Yony Richard',
            'apellido'=>            'Montoya Burgos',
            'telefonoUsuario'=>     '66483990',
            'direccionUsuario'=>    'Zona Norte',
            'email'=>               'yonyrichard@fcyt.umss.edu.bo',
            'password'=>            '123456',
            'repeatPassword'=>      '123456',
            'estadoUsuario'=>       'Habilitado',
            'cargoUsuario'=>        'Docente',
            'rol_id'=>              2
        ));
                
        DB::table('users')->insert(array(
            'name'=>                'Jose Gil',
            'apellido'=>            'Omonte Ojalvo',
            'telefonoUsuario'=>     '78493992',
            'direccionUsuario'=>    'Zona Este',
            'email'=>               'josegil@fcyt.umss.edu.bo',
            'password'=>            '123456',
            'repeatPassword'=>      '123456',
            'estadoUsuario'=>       'Habilitado',
            'cargoUsuario'=>        'Docente',
            'rol_id'=>              2
        ));
                
        DB::table('users')->insert(array(
            'name'=>                'Jose Roberto',
            'apellido'=>            'Omonte Ojalvo',
            'telefonoUsuario'=>     '66432718',
            'direccionUsuario'=>    'Zona Este',
            'email'=>               'joseroberto@fcyt.umss.edu.bo',
            'password'=>            '123456',
            'repeatPassword'=>      '123456',
            'estadoUsuario'=>       'Habilitado',
            'cargoUsuario'=>        'Docente',
            'rol_id'=>              2
        ));
                
        DB::table('users')->insert(array(
            'name'=>                'Ronald Edgar',
            'apellido'=>            'Patiño Tito',
            'telefonoUsuario'=>     '66432889',
            'direccionUsuario'=>    'Zona Sud',
            'email'=>               'ronaldedgar@fcyt.umss.edu.bo',
            'password'=>            '123456',
            'repeatPassword'=>      '123456',
            'estadoUsuario'=>       'Habilitado',
            'cargoUsuario'=>        'Docente',
            'rol_id'=>              2
        ));
                
        DB::table('users')->insert(array(
            'name'=>                'Magda Lena',
            'apellido'=>            'Peeters Ilonaa',
            'telefonoUsuario'=>     '77483992',
            'direccionUsuario'=>    'Zona Norte',
            'email'=>               'magdalena@fcyt.umss.edu.bo',
            'password'=>            '123456',
            'repeatPassword'=>      '123456',
            'estadoUsuario'=>       'Habilitado',
            'cargoUsuario'=>        'Docente',
            'rol_id'=>              2
        ));
                
        DB::table('users')->insert(array(
            'name'=>                'Alfredo',
            'apellido'=>            'Pericon Balderrama',
            'telefonoUsuario'=>     '76743217',
            'direccionUsuario'=>    'Zona Norte',
            'email'=>               'alfredo@fcyt.umss.edu.bo',
            'password'=>            '123456',
            'repeatPassword'=>      '123456',
            'estadoUsuario'=>       'Habilitado',
            'cargoUsuario'=>        'Docente',
            'rol_id'=>              2
        ));
                
        DB::table('users')->insert(array(
            'name'=>                'Erika Patricia',
            'apellido'=>            'Rodriguez Bilbao',
            'telefonoUsuario'=>     '77488212',
            'direccionUsuario'=>    'Zona Oeste',
            'email'=>               'erikapatricia@fcyt.umss.edu.bo',
            'password'=>            '123456',
            'repeatPassword'=>      '123456',
            'estadoUsuario'=>       'Habilitado',
            'cargoUsuario'=>        'Docente',
            'rol_id'=>              2
        ));
                
        DB::table('users')->insert(array(
            'name'=>                'Rose Mary',
            'apellido'=>            'Salazar Anaya',
            'telefonoUsuario'=>     '67544388',
            'direccionUsuario'=>    'Zona Norte',
            'email'=>               'rosemary@fcyt.umss.edu.bo',
            'password'=>            '123456',
            'repeatPassword'=>      '123456',
            'estadoUsuario'=>       'Habilitado',
            'cargoUsuario'=>        'Docente',
            'rol_id'=>              2
        ));
                
        DB::table('users')->insert(array(
            'name'=>                'Carla',
            'apellido'=>            'Salazar Serrudo',
            'telefonoUsuario'=>     '77432510',
            'direccionUsuario'=>    'Zona Este',
            'email'=>               'carla@fcyt.umss.edu.bo',
            'password'=>            '123456',
            'repeatPassword'=>      '123456',
            'estadoUsuario'=>       'Habilitado',
            'cargoUsuario'=>        'Docente',
            'rol_id'=>              2
        ));
                
        DB::table('users')->insert(array(
            'name'=>                'Ariel Antonio',
            'apellido'=>            'Sarmiento Franco',
            'telefonoUsuario'=>     '76543279',
            'direccionUsuario'=>    'Zona Sud',
            'email'=>               'arielantonio@fcyt.umss.edu.bo',
            'password'=>            '123456',
            'repeatPassword'=>      '123456',
            'estadoUsuario'=>       'Habilitado',
            'cargoUsuario'=>        'Docente',
            'rol_id'=>              2
        ));
                
        DB::table('users')->insert(array(
            'name'=>                'Jose Antonio',
            'apellido'=>            'Soruco Maita',
            'telefonoUsuario'=>     '77584900',
            'direccionUsuario'=>    'Zona Este',
            'email'=>               'joseantonio@fcyt.umss.edu.bo',
            'password'=>            '123456',
            'repeatPassword'=>      '123456',
            'estadoUsuario'=>       'Habilitado',
            'cargoUsuario'=>        'Docente',
            'rol_id'=>              2
        ));
                
        DB::table('users')->insert(array(
            'name'=>                'Fidel',
            'apellido'=>            'Taborga Acha',
            'telefonoUsuario'=>     '77483990',
            'direccionUsuario'=>    'Zona Norte',
            'email'=>               'fidel@fcyt.umss.edu.bo',
            'password'=>            '123456',
            'repeatPassword'=>      '123456',
            'estadoUsuario'=>       'Habilitado',
            'cargoUsuario'=>        'Docente',
            'rol_id'=>              2
        ));
                
        DB::table('users')->insert(array(
            'name'=>                'Darlong Howard',
            'apellido'=>            'Taylor Terrazas',
            'telefonoUsuario'=>     '66738909',
            'direccionUsuario'=>    'Zona Norte',
            'email'=>               'darlonghoward@fcyt.umss.edu.bo',
            'password'=>            '123456',
            'repeatPassword'=>      '123456',
            'estadoUsuario'=>       'Habilitado',
            'cargoUsuario'=>        'Docente',
            'rol_id'=>              2
        ));
                
        DB::table('users')->insert(array(
            'name'=>                'Juan',
            'apellido'=>            'Terrazas Lobo',
            'telefonoUsuario'=>     '66849089',
            'direccionUsuario'=>    'Zona Norte',
            'email'=>               'juan@fcyt.umss.edu.bo',
            'password'=>            '123456',
            'repeatPassword'=>      '123456',
            'estadoUsuario'=>       'Habilitado',
            'cargoUsuario'=>        'Docente',
            'rol_id'=>              2
        ));
                
        DB::table('users')->insert(array(
            'name'=>                'Rosemary',
            'apellido'=>            'Torrico Bascope',
            'telefonoUsuario'=>     '65320908',
            'direccionUsuario'=>    'Zona Este',
            'email'=>               'rosemarytorrico@fcyt.umss.edu.bo',
            'password'=>            '123456',
            'repeatPassword'=>      '123456',
            'estadoUsuario'=>       'Habilitado',
            'cargoUsuario'=>        'Docente',
            'rol_id'=>              2
        ));
                
        DB::table('users')->insert(array(
            'name'=>                'Hernan',
            'apellido'=>            'Ustariz Vargas',
            'telefonoUsuario'=>     '77483990',
            'direccionUsuario'=>    'Zona Sud',
            'email'=>               'hernan@fcyt.umss.edu.bo',
            'password'=>            '123456',
            'repeatPassword'=>      '123456',
            'estadoUsuario'=>       'Habilitado',
            'cargoUsuario'=>        'Docente',
            'rol_id'=>              2
        ));
                
        DB::table('users')->insert(array(
            'name'=>                'Roberto',
            'apellido'=>            'Valenzuela Miranda',
            'telefonoUsuario'=>     '77589043',
            'direccionUsuario'=>    'Zona Sud',
            'email'=>               'robertovelenzuela@fcyt.umss.edu.bo',
            'password'=>            '123456',
            'repeatPassword'=>      '123456',
            'estadoUsuario'=>       'Habilitado',
            'cargoUsuario'=>        'Docente',
            'rol_id'=>              2
        ));
                
        DB::table('users')->insert(array(
            'name'=>                'Oscar A.',
            'apellido'=>            'Zabalaga Montano',
            'telefonoUsuario'=>     '66473892',
            'direccionUsuario'=>    'Zona La Chimba',
            'email'=>               'oscara@fcyt.umss.edu.bo',
            'password'=>            '123456',
            'repeatPassword'=>      '123456',
            'estadoUsuario'=>       'Habilitado',
            'cargoUsuario'=>        'Docente',
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
