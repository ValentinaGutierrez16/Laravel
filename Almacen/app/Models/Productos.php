<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;

    protected $table = 'productos';

    protected $fillable = ['nombre', 'estado', 'descripcion', 'stock', 'precio'];

    protected $casts = [
        'estado' => 'boolean',
        'precio' => 'decimal:2',
    ];
    public function compras()
    {
        return $this->hasMany(Compras::class);
    }
    public function ventas()
    {
        return $this->hasMany(Ventas::class);
    }
}
