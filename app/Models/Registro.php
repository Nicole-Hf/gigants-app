<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    use HasFactory;

    protected $table = 'registros';
    protected $fillable = [
      'fecha_registro',
      'administrador_id',
      'persona_id'
    ];

    public function administrador()
    {
        return $this->belongsTo(Persona::class,'administrador_id');
    }

    public function persona()
    {
        return $this->belongsTo(Persona::class,'persona_id');
    }
}
