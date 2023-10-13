@extends('components.layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Crear un nuevo proyecto') }}</div>
                    <div class="card-body">
                        
                        <form wire:submit.prevent="createProject" enctype="multipart/form-data">
                            

                            <div class="form-group">
                                <label for="titulo">Título</label>
                                <input type="text" wire:model="titulo" class="form-control" id="titulo" placeholder="Título del proyecto">
                            </div>
                            <div class="form-group">
                                <label for="descripcion">Descripción</label>
                                <textarea wire:model="descripcion" class="form-control" id="descripcion" placeholder="Descripción del proyecto"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="imagen">Imagen</label>
                                <input type="file" wire:model="imagen" class="form-control-file" id="imagen">
                            </div>

                            <button type="submit" class="btn btn-primary">Guardar Proyecto</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
