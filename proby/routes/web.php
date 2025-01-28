<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectsController;

Route::get('/', [ProjectsController::class, 'index']);

Route::get('/projects', [ProjectsController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/projects/create', [ProjectsController::class, 'create'])->name('projects.create');
Route::post('/projects', [ProjectsController::class, 'store'])->name('projects.store');
Route::get('/projects/{id}', [ProjectsController::class, 'show'])->name('projects.show');
Route::get('/projects/{id}/edit', [ProjectsController::class, 'edit'])->name('projects.edit');
Route::patch('/projects/{id}', [ProjectsController::class, 'update'])->name('projects.update');
Route::delete('/projects/{id}', [ProjectsController::class, 'destroy'])->name('projects.destroy');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';


