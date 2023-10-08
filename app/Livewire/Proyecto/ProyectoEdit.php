<?php

namespace App\Livewire\Proyecto;

use Livewire\Component;

class ProyectoEdit extends Component
{
    public function mount()
    {
        $this->layout = null;
    }
    
    public function render()
    {
        return view('livewire.proyecto.proyecto-edit');
    }
}
