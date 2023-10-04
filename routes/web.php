<?php

use App\Http\Controllers\UserController;
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

Route::controller(UserController::class)->group(function(){
    Route::get('/', 'index');
    Route::get('/login', 'login');
    Route::get('/register', 'register');
    Route::get('/categories', 'show');

    Route::get('/logout/user', 'logout');

    Route::post('/register/create', 'create_user');
    Route::post('/login/user', 'login_user');

});
