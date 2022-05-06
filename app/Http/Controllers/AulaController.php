<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aula;

class AulaController extends Controller
{
    
    //
    public function getAula(){
        return response()->json(Aula::all(),200);
    }
    public function getAulaId($id){
        $aula = Aula::find($id);
        if(is_null($aula)){
            return response()->json(['Mensaje'=>'Aula no fue encontrado'],404);
        }
        return response()->json($aula::find($id),200);
    }
    public function createAula(Request $request){
        $aula = Aula::create($request->all());
        return response($aula,200);
    }
    public function updateAula(Request $request,$id){
        $aula = Aula::find($id);
        if(is_null($aula)){
            return response()->json(['Mensaje'=>'Aula no fue encontrado'],404);
        }
        $aula->update($request->all());
        return response($aula,200);
    }

    public function deleteAulaId($id){
        $aula = Aula::find($id);
        if(is_null($aula)){
            return response()->json(['Mensaje'=>'Aula no encontrado'],404);
        }
        $aula->delete();
        return response()->json(['Mensaje'=>'Aula fue Eliminado'],200);
    }

    //para ver las aulas que estan libres
    public function getAulasLibres(){
        $aula = Aula::select("*")->where("estadoAula", "=", "Libre")->get();
        return response()->json($aula,200);
    }
}
