<?php

namespace App\Http\Controllers;

use App\Models\Egresos;
use Illuminate\Http\Request;

class EgresosController extends Controller
{
    //funcion para mostrar la vista de Egresos
    public function index()
    {
        return view('Movimientos');
    }
    //funcion para guardar los egresos
    public function store(Request $request){
        //validar
        $request->validate([
            'proveedor'=>'required',
            'monto'=>'required',
        ]);
        //guardar
        Egresos::create([
            'proveedor'=>$request->proveedor,
            'monto'=>$request->monto,
        ]);
        //redireccionar
        return back()->with('message','Egreso registrado correctamente');
    }
}
