<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CajasController extends Controller
{
    //
    public function index(){
        return view('Cajas');
    }
    //editar datos de la caja
    public function editCaja(Request $request){
        $caja = User::find($request->id);
        $caja->update([
            'usuario' => $request->usuario,
            'password' => Hash::make($request->password)
        ]);
        //redireccionar
        return back()->with('message','Caja actualizada correctamente');
    }
}
