<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;
use App\Models\porter;
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

// Route::get('/', function () {
//     return view('auth/login');
// });

Route::group([], function () {
    Route::get('', [LoginController::class, 'login'])->name('login');
    Route::post('login', [LoginController::class, 'loginPost'])->name('login.post');
});
Route::group([], function () {
    Route::get('register', [RegisterController::class, 'register'])->name('register');
    Route::post('register', [RegisterController::class, 'registerPost'])->name('register.post');
});
Route::controller(PageController::class)->group(function(){
    Route::get('porter', 'porter')->name('porter');
});

Route::middleware('auth')->group(function(){
    Route::get('index', [PageController::class, 'index'])->name('index');
    Route::get('services', [PageController::class, 'services'])->name('services');
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
});
