<?php

namespace App\Livewire;

use App\Models\Productos as ModelsProductos;
use Livewire\Component;

class Productos extends Component
{
    public $productos;
    public $categorias;
    public $buscado = '';

    public function mount(){
        $this->productos = ModelsProductos::orderBy('created_at', 'desc')->get();
        $this->categorias = ModelsProductos::select('categoria')->distinct()->pluck('categoria');
    }
    public function todos(){
        $this->productos = ModelsProductos::orderBy('created_at', 'desc')->get();
        $this->categorias = ModelsProductos::select('categoria')->distinct()->pluck('categoria');
    }
    public function buscador(){
        $this->productos = collect(ModelsProductos::orderBy('created_at', 'desc')->get())
            ->filter(function ($producto) {
                return stripos($producto->nombre, $this->buscado) !== false;
            });
    }
    public function filtro($categoria){
        $this->productos = ModelsProductos::where('categoria', $categoria)->orderBy('created_at', 'desc')->get();
    }
    public function render()
    {
        if (!empty($this->buscado)) {
            $this->buscador();
        }
        return view('livewire.productos');
    }
}
