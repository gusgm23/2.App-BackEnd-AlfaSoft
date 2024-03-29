<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;
    public $timestamps = false;
    //protected $keyType = 'string';
    protected $fillable = [
        //'id', 
        'codigoMateria', 
        'nombreMateria',
        'estadoMateria',
        'user_id'
    ];
    protected $hidden = ['created_at', 'updated_at'];
}
