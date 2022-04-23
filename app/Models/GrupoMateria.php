<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrupoMateria extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [ 
        'grupoMateria', 
        'estadoGrupoMateria',
        'materia_id'
    ];
    protected $hidden = ['created_at', 'updated_at'];
}
