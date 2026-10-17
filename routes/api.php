<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProyectoController; 
use App\Http\Middleware\VerificarApiKey;

Route::middleware([VerificarApiKey::class])->group(function () {
    Route::apiResource('proyectos', ProyectoController::class);
});
