<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SolicitudAula;

class SolicitudAulaController extends Controller
{
    //
    public function getSolicitudAula(){
        return response()->json(SolicitudAula::all(),200);
    }

    public function getSolicitudAulaId($id){
        $solicitud = SolicitudAula::find($id);
        if(is_null($solicitud)){
            return response()->json(['Mensaje'=>'Solicitud no encontrada'],404);
        }
        return response()->json($solicitud::find($id),200);
    }

    public function createSolicitudAula(Request $request){
        $solicitud = SolicitudAula::create($request->all());
        return response($solicitud,200);
    }

    public function updateSolicitudAula(Request $request,$id){
        $solicitud = SolicitudAula::find($id);
        if(is_null($solicitud)){
            return response()->json(['Mensaje'=>'Solicitud no encontrada'],404);
        }
        $solicitud->update($request->all());
        return response($solicitud,200);
    }

    public function deleteSolicitudAulaId($id){
        $solicitud = SolicitudAula::find($id);
        if(is_null($solicitud)){
            return response()->json(['Mensaje'=>'Solicitud no encontrada'],404);
        }
        $solicitud->delete();
        return response()->json(['Mensaje'=>'Solicitud Eliminada'],200);
    }

    //Para ver las solicitudes que estan pendientes
    public function getSolicitudAulaEstado(){
        $solicitud = SolicitudAula::select("*")->where("estadoSolicitud", "=", "pendiente")->get();
        return response()->json($solicitud,200);
    }

    public function getSolicitudAulaByUser(Request $request){
        $name = $request->nombreDocenteSolicitud;
        $lastName = $request->apellidoDocenteSolicitud;
        $status = $request->estadoSolicitud;
 
        $solicitud = SolicitudAula::select("solicitud_aulas.*","aulas.nombreAula","aulas.capacidadAula")
        ->where("nombreDocenteSolicitud", "=", $name)
        ->where("apellidoDocenteSolicitud", "=", $lastName)
        ->where("estadoSolicitud", "=", $status)
        ->leftJoin('reserva_aulas', 'solicitud_aulas.id', '=', 'reserva_aulas.idSolicitud')
        ->leftJoin('aulas', 'reserva_aulas.aula_id', '=', 'aulas.id')
        ->get();
        return response()->json($solicitud,200);
    }

}
