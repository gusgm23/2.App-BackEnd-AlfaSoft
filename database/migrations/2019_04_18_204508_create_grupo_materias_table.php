<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGrupoMateriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupo_materias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('grupoMateria');
            $table->string('idDocente');
            $table->string('idAuxiliar');
            $table->string('estadoGrupoMateria');
            $table->timestamps();

            $table->integer('materia_id')->unsigned();
            $table->foreign('materia_id')->references('id')->on('materias')->nullable()->onDelete('SET NULL');
        });

        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'6',
            'idDocente'                 =>'55',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>1
        ));

        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'2',
            'idDocente'                 =>'17',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>1
        ));
               
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'4',
            'idDocente'                 =>'10',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>1
        ));
        
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'3',
            'idDocente'                 =>'62',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>1
        ));
        
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'1',
            'idDocente'                 =>'55',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>1
        ));
        
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'5',
            'idDocente'                 =>'45',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>1
        ));
        
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'7',
            'idDocente'                 =>'30',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>1
        ));
        
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'10',
            'idDocente'                 =>'4',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>1
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'1',
            'idDocente'                 =>'23',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>2
        ));
              
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'2',
            'idDocente'                 =>'23',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>2
        ));
        
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'3',
            'idDocente'                 =>'51',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>2
        ));
        
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'4',
            'idDocente'                 =>'33',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>2
        ));
        
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'5',
            'idDocente'                 =>'23',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>2
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'C4',
            'idDocente'                 =>'21',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>3
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'C5',
            'idDocente'                 =>'21',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>3
        ));
        
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'C6',
            'idDocente'                 =>'21',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>3
        ));
        
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'D2',
            'idDocente'                 =>'39',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>3
        ));
        
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'D3',
            'idDocente'                 =>'39',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>3
        ));
        
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'G1',
            'idDocente'                 =>'63',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>3
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'5',
            'idDocente'                 =>'58',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>4
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'6',
            'idDocente'                 =>'50',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>4
        ));
        
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'8',
            'idDocente'                 =>'38',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>4
        ));
        
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'14',
            'idDocente'                 =>'38',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>4
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'12',
            'idDocente'                 =>'25',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>5
        ));

        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'17',
            'idDocente'                 =>'49',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>5
        ));
        
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'8',
            'idDocente'                 =>'48',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>5
        ));
        
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'9',
            'idDocente'                 =>'36',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>5
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'1',
            'idDocente'                 =>'8',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>6
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'2',
            'idDocente'                 =>'30',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>6
        ));
        
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'3',
            'idDocente'                 =>'37',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>6
        ));
        
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'4',
            'idDocente'                 =>'9',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>6
        ));
        
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'5',
            'idDocente'                 =>'16',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>6
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'5',
            'idDocente'                 =>'59',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>7
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'8',
            'idDocente'                 =>'49',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>7
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'6A',
            'idDocente'                 =>'18',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>8
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'7',
            'idDocente'                 =>'22',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>8
        ));
        
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'6',
            'idDocente'                 =>'60',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>8
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'1',
            'idDocente'                 =>'27',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>9
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'2',
            'idDocente'                 =>'25',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>9
        ));
        
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'3',
            'idDocente'                 =>'20',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>9
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'1',
            'idDocente'                 =>'61',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>10
        ));
               
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'5',
            'idDocente'                 =>'61',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>10
        ));
        
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'2',
            'idDocente'                 =>'17',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>10
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'3',
            'idDocente'                 =>'17',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>10
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'1',
            'idDocente'                 =>'11',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>11
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'2',
            'idDocente'                 =>'17',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>11
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'3A',
            'idDocente'                 =>'22',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>12
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'4',
            'idDocente'                 =>'59',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>12
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'4',
            'idDocente'                 =>'57',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>13
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'5',
            'idDocente'                 =>'48',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>13
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'2',
            'idDocente'                 =>'36',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>14
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'3',
            'idDocente'                 =>'64',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>14
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'1',
            'idDocente'                 =>'30',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>15
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'2',
            'idDocente'                 =>'41',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>15
        ));
        
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'3',
            'idDocente'                 =>'45',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>15
        ));
        
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'5',
            'idDocente'                 =>'47',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>15
        ));
        
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'6',
            'idDocente'                 =>'9',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>15
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'1',
            'idDocente'                 =>'13',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>16
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'2',
            'idDocente'                 =>'3',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>16
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'2',
            'idDocente'                 =>'24',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>17
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'2',
            'idDocente'                 =>'57',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>18
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'3',
            'idDocente'                 =>'49',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>18
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'1',
            'idDocente'                 =>'13',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>19
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'2',
            'idDocente'                 =>'13',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>19
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'1',
            'idDocente'                 =>'7',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>20
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'2',
            'idDocente'                 =>'7',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>20
        ));
        
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'3',
            'idDocente'                 =>'24',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>20
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'1',
            'idDocente'                 =>'55',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>21
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'2',
            'idDocente'                 =>'55',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>21
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'2',
            'idDocente'                 =>'44',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>22
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'3',
            'idDocente'                 =>'14',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>22
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'1',
            'idDocente'                 =>'52',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>23
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'1',
            'idDocente'                 =>'51',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>24
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'2',
            'idDocente'                 =>'51',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>24
        ));
        
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'3',
            'idDocente'                 =>'51',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>24
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'1',
            'idDocente'                 =>'29',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>25
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'1A',
            'idDocente'                 =>'55',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>25
        ));
        
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'2',
            'idDocente'                 =>'6',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>25
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'1',
            'idDocente'                 =>'24',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>26
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'2',
            'idDocente'                 =>'24',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>26
        ));
        
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'3',
            'idDocente'                 =>'2',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>26
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'1',
            'idDocente'                 =>'3',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>27
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'2',
            'idDocente'                 =>'3',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>27
        ));
        
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'3',
            'idDocente'                 =>'29',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>27
        ));
        
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'4',
            'idDocente'                 =>'3',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>27
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'2',
            'idDocente'                 =>'28',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>28
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'2',
            'idDocente'                 =>'40',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>29
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'2',
            'idDocente'                 =>'34',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>30
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'3',
            'idDocente'                 =>'56',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>30
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'1',
            'idDocente'                 =>'10',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>31
        ));
              
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'2',
            'idDocente'                 =>'10',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>31
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'1',
            'idDocente'                 =>'19',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>32
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'2',
            'idDocente'                 =>'61',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>32
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'1',
            'idDocente'                 =>'32',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>33
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'2',
            'idDocente'                 =>'53',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>33
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'1',
            'idDocente'                 =>'7',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>34
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'2',
            'idDocente'                 =>'7',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>34
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'2',
            'idDocente'                 =>'31',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>35
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'2',
            'idDocente'                 =>'14',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>36
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'1',
            'idDocente'                 =>'47',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>37
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'1',
            'idDocente'                 =>'30',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>38
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'2',
            'idDocente'                 =>'17',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>38
        ));
        
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'3',
            'idDocente'                 =>'5',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>38
        ));
        
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'4',
            'idDocente'                 =>'53',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>38
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'2',
            'idDocente'                 =>'61',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>39
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'2',
            'idDocente'                 =>'46',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>40
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'1',
            'idDocente'                 =>'7',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>41
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'1',
            'idDocente'                 =>'47',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>42
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'5',
            'idDocente'                 =>'11',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>43
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'2',
            'idDocente'                 =>'15',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>44
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'1',
            'idDocente'                 =>'33',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>45
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'1',
            'idDocente'                 =>'53',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>46
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'2',
            'idDocente'                 =>'9',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>46
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'1',
            'idDocente'                 =>'10',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>47
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'2',
            'idDocente'                 =>'2',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>47
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'3',
            'idDocente'                 =>'6',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>48
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'4',
            'idDocente'                 =>'28',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>48
        ));
        
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'5',
            'idDocente'                 =>'10',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>48
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'1',
            'idDocente'                 =>'12',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>49
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'1',
            'idDocente'                 =>'12',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>50
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'2',
            'idDocente'                 =>'35',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>51
        ));
               
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'2',
            'idDocente'                 =>'45',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>52
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'3',
            'idDocente'                 =>'32',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>52
        ));
        
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'4',
            'idDocente'                 =>'53',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>52
        ));
        
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'5',
            'idDocente'                 =>'9',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>52
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'2',
            'idDocente'                 =>'12',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>53
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'1',
            'idDocente'                 =>'4',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>54
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'1',
            'idDocente'                 =>'28',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>55
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'1',
            'idDocente'                 =>'32',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>56
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'3',
            'idDocente'                 =>'54',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>16
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'7',
            'idDocente'                 =>'43',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>7
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'4',
            'idDocente'                 =>'26',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>10
        ));
                
        DB::table('grupo_materias')->insert(array(
            'grupoMateria'              =>'7',
            'idDocente'                 =>'42',
            'idAuxiliar'                =>'No asignado',
            'estadoGrupoMateria'        =>'Habilitado',
            'materia_id'                =>5
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grupo_materias');
    }
}
