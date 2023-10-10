<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Admin\ProjectIndex;
use App\Livewire\Admin\ProjectCreate;
use App\Livewire\Admin\ProjectEdit;
use App\Livewire\Admin\ProjectDelete;

use App\Livewire\Proyecto\ProyectoIndex;
use App\Livewire\Proyecto\ProyectoCreate;
use App\Livewire\Proyecto\ProyectoEdit;

Auth::routes();
Route::get('/', ProyectoIndex::class)->name('proyecto.index');
Route::get('/proyecto/create', ProyectoCreate::class)->name('proyecto.create');
Route::get('/proyecto/{proyecto}/edit', ProyectoEdit::class)->name('proyecto.edit');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/projects', ProjectIndex::class)->name('admin.projects.index');
    Route::get('/admin/projects/create', ProjectCreate::class)->name('admin.projects.create');
    Route::get('/admin/projects/{project}/edit', ProjectEdit::class)->name('admin.projects.edit');
    Route::get('/admin/projects/{project}/delete', ProjectDelete::class)->name('admin.projects.delete');
});
