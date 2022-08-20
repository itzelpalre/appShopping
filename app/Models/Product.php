<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'observaciones',
        'imagenurl',
        'contenido',
        'categoria'
    ];

    public function scopeName($query, $name)
    {
      if($name)
            return $query->where('nombre', 'LIKE', "%$name%")
                         ->orWhere('descripcion', 'LIKE', "%$name%")
                         ->orWhere('categoria', 'LIKE', "%$name%");
    }
}
