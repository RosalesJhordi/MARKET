<?php

namespace App\Livewire;

use App\Models\Productos;
use App\Models\Ventas as ModelsVentas;
use Livewire\Component;

class Ventas extends Component
{
    public $ventas;
    public $categoria_producto;

    public $total;

    public $cantidad;
    public $precio;
    public $productos;
    public $productoSelec;
    public $id;

    public function mount(){
        $this->ventas = ModelsVentas::orderBy('created_at', 'desc')->get();
        $this->productos = Productos::all();
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
    public function seleccProducto($id){
        $this->id = $id;
        $this->productoSelec = Productos::find($id);
        $this->precio = $this->productoSelec->precio;

    }
    public function updatedCantidad(){
        $this->total = $this->cantidad * $this->precio;
        
    }
    public $editVenta;
    public function editarVenta($id){
        $this->editVenta = ModelsVentas::find($id);
    }
    public function render()
    {
        return view('livewire.ventas');
    }
}
