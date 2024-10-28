<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $fillable = [
        'nombre',
        'marca',
        'precio',
        'categoria',
        'stock',
        'imagen',
    ];

    public function ventas()
    {
        return $this->hasMany(Ventas::class);
    }
}
