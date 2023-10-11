<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Proyecto;

class ProyectoCreate extends Component
{
    use WithFileUploads;

    public $titulo;
    public $descripcion;
    public $imagen;

    public function createProject()
    {
        $this->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'imagen' => 'image|max:1024', // Valida que la imagen sea válida y tenga un tamaño máximo de 1MB.
        ]);

        // Guardar la imagen en el almacenamiento
        $imagenPath = $this->imagen->store('public/images'); // Guarda la imagen en el directorio public/images

        // Crear un nuevo proyecto en la base de datos
        Proyecto::create([
            'titulo' => $this->titulo,
            'descripcion' => $this->descripcion,
            'imagen' => $imagenPath, // Guarda la ruta de la imagen en la base de datos
        ]);

        // Redirigir a la página de proyectos o a donde desees después de guardar
        return redirect()->to('/proyectos');
    }

    public function render()
    {
        return view('livewire.proyecto-create');
    }
}
