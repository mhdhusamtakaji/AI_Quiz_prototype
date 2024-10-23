<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AIController;



Route::post('/gpt4-evaluate', [AIController::class, 'evaluateText']);
Route::post('/image-process', [AIController::class, 'processImage']);