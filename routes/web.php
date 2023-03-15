<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    RegisterController,
    LoginController
};
use App\Http\Controllers\Admin\{
    HomeController,
    AcaraController,
    RespondenController,
    RequestLaguController,
    SiaranController,
};

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
    Route::get('/home', HomeController::class);

    // Siaran
    Route::resource('/siaran', SiaranController::class)->except('show');
    Route::get('/siaran/checkSlug', [SiaranController::class, 'checkSlug'])->name('siaran.slug');

    // Acara
    Route::resource('/acara', AcaraController::class)->except('show');

    // Responden
    Route::resource('/responden', RespondenController::class)->only(['index', 'destroy']);
    Route::get('/responden/cetak', [RespondenController::class, 'cetak'])->name('responden.cetak');

    // Request Lagu
    Route::resource('/request-lagu', RequestLaguController::class)->except('show');

    // Request Lagu
    Route::resource('/lagu', LaguController::class);

    // Logout
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});