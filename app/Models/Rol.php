<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['id', 'rol', 'estado'];
    protected $hidden = ['created_at', 'updated_at'];
}
