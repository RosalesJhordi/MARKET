<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //funcion de login index
    public function index(){
        return view('Auth.Login');
    }

    //funcion de login post
    public function login(Request $request){
        $request->validate([
            'usuario' => 'required',
            'password' => 'required|min:6'
        ]);

        $credentials = $request->only('usuario', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            Auth::user();

            if(Auth::user()->permisos){
                foreach (Auth::user()->permisos as $permiso) {
                    if ($permiso == 'Administrador') {
                        return redirect()->route('/');
                    } else {
                        return redirect()->route('Productos');
                    }
                }
            }
        } else {
            return redirect()->route('login')->with('error', 'Credenciales incorrectas');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

}
