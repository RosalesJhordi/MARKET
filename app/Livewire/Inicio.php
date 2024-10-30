<?php

namespace App\Livewire;

use App\Models\Egresos;
use App\Models\Productos;
use App\Models\User;
use App\Models\Ventas;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;

class Inicio extends Component
{
    use WithFileUploads;

    public $usuarios;

    public $productos;

    public $cajas;

    //producto datos
    public $usuario;

    public $contraseña;

    public $categoria_producto;

    public $total;

    public $cantidad;
    public $precio;
    public $ingresos;
    public $egresos;
    public $ventas;
    public $egresosTotal;
    public $editCaja;

    public $id_caja;
    public $produc_rules = [
        'usuario' => 'required',
        'contraseña' => 'required|min:6|max:12',
    ];

    public function mount()
    {
        $this->usuaurios();
    }

    public function usuaurios()
    {
        $this->usuarios = User::all();
        $this->productos = Productos::all();
        $this->cajas = User::whereJsonContains('permisos', 'Caja')->get();
        $this->ingresos = Ventas::pluck('total')->sum();
        $this->ventas = Ventas::all();
        $this->egresos = Egresos::all();
        $this->egresosTotal = Egresos::pluck('monto')->sum();
    }
    public function updatedCategoriaProducto()
    {
        if ($this->categoria_producto != 'Seleciona Producto') {
            $producto = Productos::find($this->categoria_producto);
            $this->precio = $producto->precio;
        }else{
            $this->total = 0;
        }
    }
    public function updatedCantidad(){
        $this->total = $this->cantidad * $this->precio;
    }

    //funcion para agregar nuevo producto
    public function addCaja()
    {
        $this->validate($this->produc_rules);

        $caja = User::create([
            'usuario' => $this->usuario,
            'password' => Hash::make($this->contraseña),
            'permisos' => ['Caja'],
        ]);
        $this->reset(['usuario', 'contraseña']);
        $this->dispatch('caja-agregada');
        $this->usuaurios();
    }

    public function editarCaja($id){
        $this->editCaja = User::find($id);
        $this->usuaurios();
    }
    public $editProducto;
    public function editarProducto($id){
        $this->editProducto = Productos::find($id);
        $this->usuaurios();
    }
    public $editVenta;
    public function editarVenta($id){
        $this->editVenta = Ventas::find($id);
        $this->usuaurios();
    }
    public $editEgreso;
    public function editarEgreso($id){
        $this->editEgreso = Egresos::find($id);
        $this->usuaurios();
    }
    public function delCaja($id){
        $caja = User::find($id);
        $caja->delete();
        $this->dispatch('caja-eliminada');
        $this->usuaurios();
    }

    public function delProducto($id){
        $producto = Productos::find($id);
        $producto->delete();
        $this->dispatch('producto-eliminado');
        $this->usuaurios();
    }
    public function render()
    {
        return view('livewire.inicio');
    }
}
