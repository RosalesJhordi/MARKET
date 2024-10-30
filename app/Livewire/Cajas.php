<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Cajas extends Component
{

    public $cajas;
    public $usuario;
    public $contraseña;
    public $editCaja;
    public $produc_rules = [
        'usuario' => 'required',
        'contraseña' => 'required|min:6|max:12',
    ];

    public function mount()
    {
        $this->usuaurios();
    }
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
    public function delCaja($id){
        $caja = User::find($id);
        $caja->delete();
        $this->dispatch('caja-eliminada');
        $this->usuaurios();
    }

    public function usuaurios()
    {
        $this->cajas = User::whereJsonContains('permisos', 'Caja')->get();
    }
    public function render()
    {
        return view('livewire.cajas');
    }
}
