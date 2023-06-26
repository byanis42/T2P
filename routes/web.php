<?php

// use App\Http\Controllers\DashboardController;
// use App\Http\Controllers\LoginController;
// use App\Http\Controllers\RegisterController;
// use Illuminate\Support\Facades\Route;

// /*
// |--------------------------------------------------------------------------
// | Web Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register web routes for your application. These
// | routes are loaded by the RouteServiceProvider and all of them will
// | be assigned to the "web" middleware group. Make something great!
// |
// */

// Route::group(['middleware' => 'guest'], function () {
//     Route::get('/register', [RegisterController::class, 'showForm']);
//     Route::get('/login', [LoginController::class, 'showForm'])
//         ->name('login');
// });

// Route::post('/register', [RegisterController::class, 'create']);
// Route::post('/login', [LoginController::class, 'authenticate']);

// Route::get('/', function () {
//     return redirect()->intended('dashboard');
// });
// Route::get('/dashboard', [DashboardController::class, 'show'])
//     ->middleware('auth')
//     ->name('dashboard');


use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [RegisterController::class, 'showForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');
    Route::get('/login', [LoginController::class, 'showForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
});

Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/tasks', [DashboardController::class, 'storeTask'])->name('tasks.store');
    Route::delete('/tasks/{task}', [DashboardController::class, 'deleteTask'])->name('tasks.delete');
    Route::put('/tasks/{task}', [DashboardController::class, 'updateTaskStatus'])->name('tasks.updateStatus');
});

Route::redirect('/', '/dashboard');
