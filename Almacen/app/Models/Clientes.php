<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;
    protected $table = 'clientes'; //para especificar que el nombre de la tabla es clientes
    protected $fillable = ['nombre', 'correo', 'telefono', 'estado']; //para especificar  las columnas 

    protected $casts = [
        'estado' => 'boolean',
    ]; //especificar que esta columna es booleano

    public function ventas() //relación 
    {
        return $this->hasMany(Ventas::class);
    }
}
