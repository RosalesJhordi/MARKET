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
    public function mount(){
        $this->ventas = ModelsVentas::all();
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
    public function updatedCantidad(){
        $this->total = $this->cantidad * $this->precio;
    }
    public function render()
    {
        return view('livewire.ventas');
    }
}
