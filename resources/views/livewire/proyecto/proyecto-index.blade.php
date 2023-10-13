@extends('components.layouts.app')

@section('content')
    <div class="project-list">
        <h1 class="text-2xl font-bold mb-4">Listado de Proyectos</h1>
        <div class="project-grid">
            @foreach ($proyectos as $proyecto)
                <div class="bg-white p-4 border rounded-lg relative">
                    <div class="bg-cover bg-center h-48" style="background-image: url('images/{{ $proyecto->imagen }}');"></div>
                    <div class="absolute inset-0 bg-black opacity-0 hover:opacity-75 transition duration-300 flex items-center justify-center">
                        <div class="text-white text-center">
                            <h2 class="project-title">{{ $proyecto->titulo }}</h2>
                            <p class="project-description">{{ $proyecto->descripcion }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
