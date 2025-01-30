<?php

use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\ProjectsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Rotas públicas
Route::post('/', [LoginController::class, 'login']);


// Rotas restritas
Route::group(['middleware' => ['auth:sanctum']], function(){
    Route::get('/projects', [ProjectsController::class, 'index']);
    Route::get('/projects/{id}', [ProjectsController::class, 'show']);
    Route::post('/projects', [ProjectsController::class, 'store']);
    Route::post('/projects/{id}', [ProjectsController::class, 'update']);
    Route::delete('/projects/{id}', [ProjectsController::class, 'destroy']);
    Route::post('/logout/{user}', [LoginController::class, 'logout']);
});