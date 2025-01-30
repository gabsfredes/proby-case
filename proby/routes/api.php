<?php

use App\Http\Controllers\Api\LoginController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Rotas públicas
Route::post('/', [LoginController::class, 'login']);


// Rotas restritas
Route::group(['middleware' => ['auth:sanctum']], function(){
    
});
