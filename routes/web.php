<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Proyecto\ProyectoIndex;
use App\Livewire\Proyecto\ProyectoCreate;
use App\Livewire\Proyecto\ProyectoEdit;

Route::get('/', ProyectoIndex::class)->name('proyecto.index');
Route::get('/proyecto/create', ProyectoCreate::class)->name('proyecto.create');
Route::get('/proyecto/{proyecto}/edit', ProyectoEdit::class)->name('proyecto.edit');