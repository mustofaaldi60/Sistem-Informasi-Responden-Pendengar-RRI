<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{LoginController, RegisterController};
use App\Http\Controllers\Admin\{AcaraController, SiaranController};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['guest'])->group(function () {
    // Home Page
    Route::get('/', fn () => view('home'));

    // Register
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

    // Login
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'store'])->name('login.store');
});


Route::middleware(['auth'])->group(function () {
    // Dashboard Page
    Route::get('/home', fn () => view('admin.home'));

    // Siaran
    Route::resource('/siaran', SiaranController::class);

    // Acara
    Route::resource('/acara', AcaraController::class);

    // Logout
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});
