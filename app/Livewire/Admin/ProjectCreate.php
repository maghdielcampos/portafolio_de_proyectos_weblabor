<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Proyecto;
use Illuminate\Support\Facades\Auth;

class ProjectCreate extends Component
{
    use WithFileUploads;

    public $titulo;
    public $descripcion;
    public $imagen;

    public function createProject()
    {
        // Validación después de definir $imagenPath
        dd($this->titulo, $this->descripcion, $this->imagen);
        $this->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'imagen' => 'image|max:2048', // Valida que la imagen sea válida y tenga un tamaño máximo de 2MB.
        ]);
    
        // Guardar la imagen en el almacenamiento
        $imagenPath = $this->imagen->store('public/images'); // Guarda la imagen en el directorio public/images
    
        // Crear un nuevo proyecto en la base de datos
        Proyecto::create([
            'titulo' => $this->titulo,
            'descripcion' => $this->descripcion,
            'imagen' => $imagenPath, // Guarda la ruta de la imagen en la base de datos
            'user_id' => Auth::user()->id, // Asigna el ID del usuario autenticado como propietario del proyecto
        ]);
    
        // Redirigir a la página de proyectos o a donde desees después de guardar
        return redirect()->to(route('proyecto.index'));
    }
    

    public function render()
    {
        return view('livewire.admin.project-create');
    }
}
