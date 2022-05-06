<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        //'id', 
        'nombreAula', 
        'capacidadAula',
        'estadoAula',
        'solicitud_id'
    ];
    protected $hidden = ['created_at', 'updated_at'];

}
