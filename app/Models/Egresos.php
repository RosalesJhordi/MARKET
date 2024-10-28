<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Egresos extends Model
{
    protected $fillable = [
        'proveedor',
        'monto',
    ];
}
