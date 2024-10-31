<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    //funcion para mostrar los productos
    public function index(){
        return view('Productos');
    }
    //funcion para gurdar produtos
    public function guardarProducto(Request $request){
        $request->validate([
            'nombre' => 'required',
            'precio' => 'required',
            'categoria' => 'required',
            'stock' => 'required',
            'imagen' => 'required|image|mimes:jpeg,webp,WebP,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('imagen')) {
            $image = Str::uuid() . '.' . $request->file('imagen')->getClientOriginalExtension();
            $path = public_path('ServidorProductos');
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            $request->file('imagen')->move($path, $image);
        }

        Productos::create([
            'nombre' => $request->nombre,
            'marca' => $request->marca,
            'precio' => $request->precio,
            'categoria' => $request->categoria,
            'stock' => $request->stock,
            'imagen' => $image,
        ]);
        return back()->with('message', 'Producto agregado correctamente.');
    }

    //editar producto
    public function editarProducto(Request $request){
        $producto = Productos::find($request->id);
        $producto->fill($request->all());
        $producto->save();

        return back()->with('message', 'Producto actualizado correctamente.');
    }
}
