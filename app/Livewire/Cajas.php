<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Cajas extends Component
{

    public $cajas;

    public function mount()
    {
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
