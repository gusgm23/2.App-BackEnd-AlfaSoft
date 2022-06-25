<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMateriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materias', function (Blueprint $table) {
            //$table->string('id', 30)->primary();
            $table->increments('id');
            $table->string('codigoMateria');
            $table->string('nombreMateria');
            $table->string('estadoMateria');
            //$table->string('grupoMateria');
            $table->timestamps();

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->nullable()->onDelete('SET NULL');
            //$table->string('name');
            //$table->foreign('name')->references('id')->on('users')->nullable()->onDelete('SET NULL');
        });

        DB::table('materias')->insert(array(
            'codigoMateria'     =>'202200005',
            'nombreMateria'     =>'Introduccion a la programacion',
            'estadoMateria'     =>'Habilitado',
            'user_id'           =>1
        ));     
                
        DB::table('materias')->insert(array(
            'codigoMateria'     =>'202200001',
            'nombreMateria'     =>'Ingles I',
            'estadoMateria'     =>'Habilitado',
            'user_id'           =>1
        ));     
        
        DB::table('materias')->insert(array(
            'codigoMateria'     =>'202200002',
            'nombreMateria'     =>'Física General',
            'estadoMateria'     =>'Habilitado',
            'user_id'           =>1
        ));     
        
        DB::table('materias')->insert(array(
            'codigoMateria'     =>'202200003',
            'nombreMateria'     =>'Algebra I',
            'estadoMateria'     =>'Habilitado',
            'user_id'           =>1
        ));     
        
        DB::table('materias')->insert(array(
            'codigoMateria'     =>'202200004',
            'nombreMateria'     =>'Calculo I',
            'estadoMateria'     =>'Habilitado',
            'user_id'           =>1
        ));     
             
        DB::table('materias')->insert(array(
            'codigoMateria'     =>'202200006',
            'nombreMateria'     =>'Metodología Investigación y Tec.',
            'estadoMateria'     =>'Habilitado',
            'user_id'           =>1
        ));

        DB::table('materias')->insert(array(
            'codigoMateria'     =>'202200007',
            'nombreMateria'     =>'Algebra II',
            'estadoMateria'     =>'Habilitado',
            'user_id'           =>1
        ));     
               
        DB::table('materias')->insert(array(
            'codigoMateria'     =>'202200008',
            'nombreMateria'     =>'Calculo II',
            'estadoMateria'     =>'Habilitado',
            'user_id'           =>1
        ));     
        
        DB::table('materias')->insert(array(
            'codigoMateria'     =>'202200009',
            'nombreMateria'     =>'Matemática Discreta',
            'estadoMateria'     =>'Habilitado',
            'user_id'           =>1
        ));     
        
        DB::table('materias')->insert(array(
            'codigoMateria'     =>'202200010',
            'nombreMateria'     =>'Elem. Programación y Estruc. de Datos',
            'estadoMateria'     =>'Habilitado',
            'user_id'           =>1
        ));     
        
        DB::table('materias')->insert(array(
            'codigoMateria'     =>'202200011',
            'nombreMateria'     =>'Arquitectura de Computadoras I',
            'estadoMateria'     =>'Habilitado',
            'user_id'           =>1
        ));     
              
        DB::table('materias')->insert(array(
            'codigoMateria'     =>'202200012',
            'nombreMateria'     =>'Ecuaciones Diferenciales',
            'estadoMateria'     =>'Habilitado',
            'user_id'           =>1
        ));     
        
        DB::table('materias')->insert(array(
            'codigoMateria'     =>'202200013',
            'nombreMateria'     =>'Estadística I',
            'estadoMateria'     =>'Habilitado',
            'user_id'           =>1
        ));     
        
        DB::table('materias')->insert(array(
            'codigoMateria'     =>'202200014',
            'nombreMateria'     =>'Calculo Numérico',
            'estadoMateria'     =>'Habilitado',
            'user_id'           =>1
        ));     
        
        DB::table('materias')->insert(array(
            'codigoMateria'     =>'202200015',
            'nombreMateria'     =>'Taller de Programación',
            'estadoMateria'     =>'Habilitado',
            'user_id'           =>1
        ));     
        
        DB::table('materias')->insert(array(
            'codigoMateria'     =>'202200016',
            'nombreMateria'     =>'Base de Datos I',
            'estadoMateria'     =>'Habilitado',
            'user_id'           =>1
        ));     
        
        DB::table('materias')->insert(array(
            'codigoMateria'     =>'202200017',
            'nombreMateria'     =>'Circuitos Electrónicos',
            'estadoMateria'     =>'Habilitado',
            'user_id'           =>1
        ));     
        
        DB::table('materias')->insert(array(
            'codigoMateria'     =>'202200018',
            'nombreMateria'     =>'Estadística II',
            'estadoMateria'     =>'Habilitado',
            'user_id'           =>1
        ));     
        
        DB::table('materias')->insert(array(
            'codigoMateria'     =>'202200019',
            'nombreMateria'     =>'Base de Datos II',
            'estadoMateria'     =>'Habilitado',
            'user_id'           =>1
        ));     
        
        DB::table('materias')->insert(array(
            'codigoMateria'     =>'202200020',
            'nombreMateria'     =>'Taller de Sistemas Operativos',
            'estadoMateria'     =>'Habilitado',
            'user_id'           =>1
        ));     
        
        DB::table('materias')->insert(array(
            'codigoMateria'     =>'202200021',
            'nombreMateria'     =>'Sistemas de Información I',
            'estadoMateria'     =>'Habilitado',
            'user_id'           =>1
        ));     
                
        DB::table('materias')->insert(array(
            'codigoMateria'     =>'202200022',
            'nombreMateria'     =>'Contabilidad Básica',
            'estadoMateria'     =>'Habilitado',
            'user_id'           =>1
        ));     
                
        DB::table('materias')->insert(array(
            'codigoMateria'     =>'202200023',
            'nombreMateria'     =>'Investigación Operativa I',
            'estadoMateria'     =>'Habilitado',
            'user_id'           =>1
        ));     
        
        DB::table('materias')->insert(array(
            'codigoMateria'     =>'202200024',
            'nombreMateria'     =>'Ingles II',
            'estadoMateria'     =>'Habilitado',
            'user_id'           =>1
        ));     
        
        DB::table('materias')->insert(array(
            'codigoMateria'     =>'202200025',
            'nombreMateria'     =>'Sistemas de Información II',
            'estadoMateria'     =>'Habilitado',
            'user_id'           =>1
        ));     
        
        DB::table('materias')->insert(array(
            'codigoMateria'     =>'202200026',
            'nombreMateria'     =>'Aplicación de Sistemas Operativos',
            'estadoMateria'     =>'Habilitado',
            'user_id'           =>1
        ));     
        
        DB::table('materias')->insert(array(
            'codigoMateria'     =>'202200027',
            'nombreMateria'     =>'Taller de Base de Datos',
            'estadoMateria'     =>'Habilitado',
            'user_id'           =>1
        ));     
        
        DB::table('materias')->insert(array(
            'codigoMateria'     =>'202200028',
            'nombreMateria'     =>'Sistemas I',
            'estadoMateria'     =>'Habilitado',
            'user_id'           =>1
        ));     
        
        DB::table('materias')->insert(array(
            'codigoMateria'     =>'202200029',
            'nombreMateria'     =>'Investigación Operativa II',
            'estadoMateria'     =>'Habilitado',
            'user_id'           =>1
        ));     
        
        DB::table('materias')->insert(array(
            'codigoMateria'     =>'202200030',
            'nombreMateria'     =>'Mercadotecnia',
            'estadoMateria'     =>'Habilitado',
            'user_id'           =>1
        ));     
        
        DB::table('materias')->insert(array(
            'codigoMateria'     =>'202200031',
            'nombreMateria'     =>'Simulación de Sistemas',
            'estadoMateria'     =>'Habilitado',
            'user_id'           =>1
        ));     
        
        DB::table('materias')->insert(array(
            'codigoMateria'     =>'202200032',
            'nombreMateria'     =>'Ingeniería de Software',
            'estadoMateria'     =>'Habilitado',
            'user_id'           =>1
        ));     
        
        DB::table('materias')->insert(array(
            'codigoMateria'     =>'202200033',
            'nombreMateria'     =>'Inteligencia Artificial',
            'estadoMateria'     =>'Habilitado',
            'user_id'           =>1
        ));     
        
        DB::table('materias')->insert(array(
            'codigoMateria'     =>'202200034',
            'nombreMateria'     =>'Redes de Computadoras',
            'estadoMateria'     =>'Habilitado',
            'user_id'           =>1
        ));     
        
        DB::table('materias')->insert(array(
            'codigoMateria'     =>'202200035',
            'nombreMateria'     =>'Sistemas II',
            'estadoMateria'     =>'Habilitado',
            'user_id'           =>1
        ));     
        
        DB::table('materias')->insert(array(
            'codigoMateria'     =>'202200036',
            'nombreMateria'     =>'Sistemas Económicos',
            'estadoMateria'     =>'Habilitado',
            'user_id'           =>1
        ));     
        
        DB::table('materias')->insert(array(
            'codigoMateria'     =>'202200037',
            'nombreMateria'     =>'Redes de Nueva Generación',
            'estadoMateria'     =>'Habilitado',
            'user_id'           =>1
        ));     
        
        DB::table('materias')->insert(array(
            'codigoMateria'     =>'202200038',
            'nombreMateria'     =>'Taller de Ingeniería de Software',
            'estadoMateria'     =>'Habilitado',
            'user_id'           =>1
        ));     
        
        DB::table('materias')->insert(array(
            'codigoMateria'     =>'202200039',
            'nombreMateria'     =>'Gestión de Calidad de Software',
            'estadoMateria'     =>'Habilitado',
            'user_id'           =>1
        ));     
        
        DB::table('materias')->insert(array(
            'codigoMateria'     =>'202200040',
            'nombreMateria'     =>'Redes Avanzadas de Computadoras',
            'estadoMateria'     =>'Habilitado',
            'user_id'           =>1
        ));     
        
        DB::table('materias')->insert(array(
            'codigoMateria'     =>'202200041',
            'nombreMateria'     =>'Dinámica de Sistemas',
            'estadoMateria'     =>'Habilitado',
            'user_id'           =>1
        ));     
        
        DB::table('materias')->insert(array(
            'codigoMateria'     =>'202200042',
            'nombreMateria'     =>'Cloud Computing',
            'estadoMateria'     =>'Habilitado',
            'user_id'           =>1
        ));     
        
        DB::table('materias')->insert(array(
            'codigoMateria'     =>'202200043',
            'nombreMateria'     =>'Electrotecnia Industrial',
            'estadoMateria'     =>'Habilitado',
            'user_id'           =>1
        ));     
        
        DB::table('materias')->insert(array(
            'codigoMateria'     =>'202200044',
            'nombreMateria'     =>'Planificación y Evaluación de Pro.',
            'estadoMateria'     =>'Habilitado',
            'user_id'           =>1
        ));     
        
        DB::table('materias')->insert(array(
            'codigoMateria'     =>'202200045',
            'nombreMateria'     =>'Ingles III',
            'estadoMateria'     =>'Habilitado',
            'user_id'           =>1
        ));     
                
        DB::table('materias')->insert(array(
            'codigoMateria'     =>'202200046',
            'nombreMateria'     =>'Evaluación y Auditoria de Sistemas',
            'estadoMateria'     =>'Habilitado',
            'user_id'           =>1
        ));     
                
        DB::table('materias')->insert(array(
            'codigoMateria'     =>'202200047',
            'nombreMateria'     =>'Taller de Simulación de Sistemas',
            'estadoMateria'     =>'Habilitado',
            'user_id'           =>1
        ));     
        
        DB::table('materias')->insert(array(
            'codigoMateria'     =>'202200048',
            'nombreMateria'     =>'Met. y Pla. de Proyecto de Grado',
            'estadoMateria'     =>'Habilitado',
            'user_id'           =>1
        ));     
        
        DB::table('materias')->insert(array(
            'codigoMateria'     =>'202200049',
            'nombreMateria'     =>'Seguridad de Sistemas',
            'estadoMateria'     =>'Habilitado',
            'user_id'           =>1
        ));     
        
        DB::table('materias')->insert(array(
            'codigoMateria'     =>'202200050',
            'nombreMateria'     =>'Informática Forense',
            'estadoMateria'     =>'Habilitado',
            'user_id'           =>1
        ));     
        
        DB::table('materias')->insert(array(
            'codigoMateria'     =>'202200051',
            'nombreMateria'     =>'Gestión Estratégica de Empresas',
            'estadoMateria'     =>'Habilitado',
            'user_id'           =>1
        ));     
        
        DB::table('materias')->insert(array(
            'codigoMateria'     =>'202200052',
            'nombreMateria'     =>'Proyecto Final',
            'estadoMateria'     =>'Habilitado',
            'user_id'           =>1
        ));     
        
        DB::table('materias')->insert(array(
            'codigoMateria'     =>'202200053',
            'nombreMateria'     =>'Practica Empresarial',
            'estadoMateria'     =>'Habilitado',
            'user_id'           =>1
        ));     
        
        DB::table('materias')->insert(array(
            'codigoMateria'     =>'202200054',
            'nombreMateria'     =>'Entornos Virtuales de Aprendizaje',
            'estadoMateria'     =>'Habilitado',
            'user_id'           =>1
        ));     
        
        DB::table('materias')->insert(array(
            'codigoMateria'     =>'202200055',
            'nombreMateria'     =>'Servicios Telematicos',
            'estadoMateria'     =>'Habilitado',
            'user_id'           =>1
        ));     
        
        DB::table('materias')->insert(array(
            'codigoMateria'     =>'202200056',
            'nombreMateria'     =>'Reconocimiento de Voz',
            'estadoMateria'     =>'Habilitado',
            'user_id'           =>1
        ));     
                

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materias');
    }
}
