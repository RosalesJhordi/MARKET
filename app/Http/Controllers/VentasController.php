<?php

namespace App\Http\Controllers;

use App\Models\Productos;
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
                $producto = Productos::find($request->producto_id);
        $producto->stock -= $request->cantidad;
        $producto->save();

        return back()->with('message', 'Venta realizada con exito');
    }

    public function editarVenta(Request $request){
        $venta = Ventas::find($request->id);
        $venta->fill($request->all());
        $venta->save();

        return back()->with('message', 'Venta actualizada correctamente.');
    }
}
