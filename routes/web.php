<?php

use App\Http\Controllers\OilChangeController;

Route::get('/', [OilChangeController::class, 'index']);
Route::post('/check', [OilChangeController::class, 'check']);
Route::get('/result/{id}', [OilChangeController::class, 'result']);