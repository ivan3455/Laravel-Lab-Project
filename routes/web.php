<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ShowRouteInfoController;
use App\Http\Controllers\ClientIpInfoController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PageController::class, 'index']);

Route::get('/login', [PageController::class, 'login'])->name('login');

Route::get('/register', [PageController::class, 'register'])->name('register');

Route::get('/profile/{username}', [PageController::class, 'showProfile']);

Route::get('/teachers', [PageController::class, 'showTeachers'])->name('teachers');

Route::get('/route-info', ShowRouteInfoController::class)->name('route.info');

// Маршрут для отримання IP-інформації
// (в контексті для викладачів, ніби для адмін-панелі)
Route::get('/teachers/admin/ip-info', ClientIpInfoController::class)->name('teachers.admin.ip_info');
