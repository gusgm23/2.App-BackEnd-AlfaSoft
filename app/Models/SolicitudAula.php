<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolicitudAula extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'id', 
        'materiaSolicitud', 
        'nombreDocenteSolicitud', 
        'grupoMateriaSOlicitud',
        'numeroEstudiantesSolicitud',
        'motivoSOlicitud',
        'fechaSolicitud',
        'horaSolicitud',
        'estadoSolicitud'
    ];
    protected $hidden = ['created_at', 'updated_at'];
}
