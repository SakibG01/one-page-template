<?php

use App\Http\Controllers\demoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('/greet', [demoController::class, 'greet']);
