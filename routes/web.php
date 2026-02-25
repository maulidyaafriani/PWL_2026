<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;   // <-- TAMBAHKAN INI

Route::get('/greeting', [WelcomeController::class, 'greeting']);