<?php

namespace App\Livewire;

use App\Models\Egresos;
use App\Models\Productos;
use App\Models\User;
use App\Models\Ventas;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Movimientos extends Component
{
    public $usuarios;
    public $productos;
    public $cajas;
    public $ingresos;
    public $egresos;
    public $ventas;
    public $egresosTotal;
    public $movimientos;
    public $total = 0;
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
        $this->total = $this->ingresos - $this->egresosTotal;

        $egresos = Egresos::select('id',
            DB::raw("CONCAT('Proveedor: ', proveedor) as descripcion"),
            'monto as total',
            'created_at')
        ->addSelect(DB::raw("'egresos' as type"));


        $ventas = Ventas::join('productos', 'ventas.producto_id', '=', 'productos.id')
            ->select('ventas.id',
                     DB::raw("CONCAT(productos.nombre, ' - ', productos.marca) as descripcion"),
                     'ventas.total',
                     'ventas.created_at')
            ->addSelect(DB::raw("'ventas' as type"));


        $this->movimientos = $egresos
            ->union($ventas)
            ->orderByDesc('created_at')
            ->get();
    }
    public function render()
    {
        return view('livewire.movimientos');
    }
}
