<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('auth.register');
Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard')->middleware('auth'); 
Route::get('logout', [DashboardController::class, 'logout'])->name('logout');

Route::middleware(['CheckMiddlewaree'])->group(function () {
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('auth.login');
    Route::post('login', [LoginController::class, 'login'])->name('login');;
    
});