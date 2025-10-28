<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ShowRouteInfoController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PageController::class, 'index']);

Route::get('/login', [PageController::class, 'login'])->name('login');

Route::get('/register', [PageController::class, 'register'])->name('register');

Route::get('/profile/{username}', [PageController::class, 'showProfile']);

Route::get('/teachers', [PageController::class, 'showTeachers'])->name('teachers');

Route::get('/route-info', ShowRouteInfoController::class)->name('route.info');
