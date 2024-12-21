<?php

use App\Http\Controllers\SzakdogaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/szakdogak', [SzakdogaController::class, 'index']);
Route::post('/szakdogak', [SzakdogaController::class, 'store']);
Route::put('/szakdogak/{id}', [SzakdogaController::class, 'update']);
Route::delete('/szakdogak/{id}', [SzakdogaController::class, 'destroy']);



