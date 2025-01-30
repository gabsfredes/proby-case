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
    Route::post('/logout/{user}', [LoginController::class, 'logout']);
});