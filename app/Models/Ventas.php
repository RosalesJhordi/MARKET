<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{
    protected $fillable = [
        'cantidad',
        'total',
        'producto_id'
    ];
    public function producto()
    {
        return $this->belongsTo(Productos::class);
    }
}
