<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CastController;

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

Route::get('/', [HomeController::class, 'home']);

Route::get('/register', [AuthController::class, 'register']);

Route::post('/welcome', [AuthController::class, 'welcome']);

Route::get('/master', function() {
    return view ('layouts.master');
});

Route::get('/dashboard', function() {
    return view ('dashboard');
});

Route::get('/data-table', function() {
    return view ('pages.data-table');
});

Route::get('/table', function() {
    return view ('pages.table');
});

Route::resource('cast', CastController::class);