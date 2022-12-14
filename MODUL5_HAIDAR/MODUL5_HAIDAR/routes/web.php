<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home-haidar');
});

Route::get('/login', [UserController::class, 'showlogin']);
Route::get('/register', [UserController::class, 'showRegis']);
Route::get('/logout', [UserController::class, 'logout']);

Route::post('/login', [UserController::class, 'login']);
Route::post('/register', [UserController::class, 'register']);