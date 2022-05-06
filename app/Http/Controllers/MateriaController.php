<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materia;

class MateriaController extends Controller
{
    //
    public function getMateria(){
        return response()->json(Materia::all(),200);
    }

    public function getMateriaId($id){
        $materia = Materia::find($id);
        if(is_null($materia)){
            return response()->json(['Mensaje'=>'Materia no fue encontrado'],404);
        }
        return response()->json($materia::find($id),200);
    }

    public function createMateria(Request $request){
        $materia = Materia::create($request->all());
        return response($materia,200);
    }

    public function updateMateria(Request $request,$id){
        $materia = Materia::find($id);
        if(is_null($materia)){
            return response()->json(['Mensaje'=>'Materia no fue encontrado'],404);
        }
        $materia->update($request->all());
        return response($materia,200);
    }

    public function deleteMateriaId($id){
        $materia = Materia::find($id);
        if(is_null($materia)){
            return response()->json(['Mensaje'=>'Materia no encontrado'],404);
        }
        $materia->delete();
        return response()->json(['Mensaje'=>'Materia fue Eliminada'],200);
    }

    //para ver las materias que estan activas
    public function getMateriasActivas(){
        $materia = Materia::select("*")->where("estadoMateria", "=", "Habilitado")->get();
        return response()->json($materia,200);
    }
}
