<?php

namespace App\Http\Controllers;

use App\Models\Ventas;
use Illuminate\Http\Request;

class VentasController extends Controller
{
    public function index(){
        return view('Ventas');
    }
    //funcion para agregar venta
    public function addVenta(Request $request){
        $request->validate([
            'cantidad' => 'required',
            'total' => 'required',
            'producto_id' => 'required',
        ]);

        Ventas::create([
            'cantidad' => $request->cantidad,
            'total' => $request->total,
            'producto_id' => $request->producto_id,
        ]);
        return back()->with('message', 'Venta realizada con exito');
    }
}
