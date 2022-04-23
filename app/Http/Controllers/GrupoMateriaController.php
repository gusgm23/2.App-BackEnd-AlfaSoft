<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GrupoMateria;

class GrupoMateriaController extends Controller
{
    //
    public function getGrupoMateria(){
        return response()->json(GrupoMateria::all(),200);
    }

    public function getGrupoMateriaId($id){
        $grupo = GrupoMateria::find($id);
        if(is_null($grupo)){
            return response()->json(['Mensaje'=>'Grupo no encontrado'],404);
        }
        return response()->json($grupo::find($id),200);
    }

    public function createGrupoMateria(Request $request){
        $grupo = GrupoMateria::create($request->all());
        return response($grupo,200);
    }

    public function updateGrupoMateria(Request $request,$id){
        $grupo = GrupoMateria::find($id);
        if(is_null($grupo)){
            return response()->json(['Mensaje'=>'Grupo no encontrado'],404);
        }
        $grupo->update($request->all());
        return response($grupo,200);
    }

    public function deleteGrupoMateriaId($id){
        $grupo = GrupoMateria::find($id);
        if(is_null($grupo)){
            return response()->json(['Mensaje'=>'Grupo no encontrado'],404);
        }
        $grupo->delete();
        return response()->json(['Mensaje'=>'Grupo fue Eliminado'],200);
    }
}
