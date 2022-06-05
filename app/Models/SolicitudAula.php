<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolicitudAula extends Model
{
    use HasFactory;
    public $timestamps = false;
    //protected $keyType = 'string';
    protected $fillable = [
        //'id',                        
        'nombreDocenteSolicitud',    
        'apellidoDocenteSolicitud',  
        'numeroEstudiantesSolicitud',
        'motivoSolicitud', 
        //nuevo atributo
        'motivoRechazo',          
        'fechaSolicitud',            
        'horaInicioSolicitud',                
        'periodoSolicitud',          
        'estadoSolicitud', 
        'materiaSolicitud',
        'grupoSolicitud',          
        'materia_id'
        //'nombreMateria',             
        //'grupoMateria',              
    ];
    protected $hidden = ['created_at', 'updated_at'];
}
