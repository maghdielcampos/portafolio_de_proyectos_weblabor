<div>
    <h1>Listado de Proyectos</h1>
    <ul>
        @foreach ($proyectos as $proyecto)
            <li>{{ $proyecto->titulo }}</li>
        @endforeach
    </ul>
</div>
