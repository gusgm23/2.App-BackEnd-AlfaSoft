<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReservaAulas;

class ReservaAulasController extends Controller
{
    //
    public function getReservaAula(){
        return response()->json(ReservaAulas::all(),200);
    }
    public function getReservaAulaId($id){
        $reservaaulas = ReservaAulas::find($id);
        if(is_null($reservaaulas)){
            return response()->json(['Mensaje'=>'Reserva de aula no fue encontrado'],404);
        }
        return response()->json($reservaaulas::find($id),200);
    }
    public function createReservaAula(Request $request){
        $reservaaulas = ReservaAulas::create($request->all());
        return response($reservaaulas,200);
    }
    public function updateReservaAula(Request $request,$id){
        $reservaaulas = ReservaAulas::find($id);
        if(is_null($reservaaulas)){
            return response()->json(['Mensaje'=>'Reserva de aula no fue encontrado'],404);
        }
        $reservaaulas->update($request->all());
        return response($reservaaulas,200);
    }
    public function deleteReservaAulaId($id){
        $reservaaulas = ReservaAulas::find($id);
        if(is_null($reservaaulas)){
            return response()->json(['Mensaje'=>'Reserva de aula no encontrado'],404);
        }
        $reservaaulas->delete();
        return response()->json(['Mensaje'=>'Reserva de aula fue Eliminado'],200);
    }
}
