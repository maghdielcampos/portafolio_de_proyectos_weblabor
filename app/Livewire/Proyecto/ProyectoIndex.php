<?php

namespace App\Livewire\Proyecto;
use App\Models\Proyecto;

use Livewire\Component;

class ProyectoIndex extends Component
{
    public function mount()
    {
        $this->layout = null;
    }
    
    public function render()
    {
        $proyectos = Proyecto::all();
    
        return view('livewire.proyecto.proyecto-index', ['proyectos' => $proyectos]);
    }
}
