<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\Console\Output\ConsoleOutput;

class Persona extends Model
{
    use HasFactory;

    protected $table = 'personas';
    protected $fillable = [
        'carnet_identidad',
        'nombre',
        'apellidos',
        'telefono',
        'direccion',
        'email',
        'tipo'
    ];

    public function usuario()
    {
        return $this->hasOne(User::class,'persona_id');
    }

    public function vendedor_facturas()
    {
        return $this->hasMany(Factura::class,'vendedor_id');
    }

    public function cliente_facturas()
    {
        return $this->hasMany(Factura::class,'cliente_id');
    }

    public function administrador_compras()
    {
        return $this->hasMany(Compra::class,'administrador_id');
    }

    public function proveedor_compras()
    {
        return $this->hasMany(Compra::class,'proveedor_id');
    }

    public function administrador_registros()
    {
        return $this->hasMany(Registro::class,'administrador_id');
    }

    public function persona_registros()
    {
        return $this->hasMany(Registro::class,'persona_id');
    }
}
