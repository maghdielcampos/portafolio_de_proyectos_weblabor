<?php

namespace App\Livewire\Proyecto;

use App\Models\Proyecto;

use Livewire\Component;

class ProyectoIndex extends Component
{
    public $proyectos;

    public function mount()
    {
        $this->layout = null;
    }

    public function render()
    {
        $this->proyectos = Proyecto::all();

        return view('livewire.proyecto.proyecto-index');
    }
}
