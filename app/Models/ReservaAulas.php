<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservaAulas extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [ 
        'fechaReserva', 
        'horaInicioReserva',
        'horaFinalReserva',
        'idSolicitud',
        'aula_id'
    ];
protected $hidden = ['created_at', 'updated_at'];
}
