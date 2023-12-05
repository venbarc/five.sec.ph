<?php

use App\Http\Controllers\CrudController;
use App\Http\Controllers\UserController;
use GuzzleHttp\Middleware;
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
    Route::get('/login', 'login')->name('login')->middleware('guest');
    Route::get('/register', 'register');

    Route::get('/logout/user', 'logout');

    Route::get('/users/dashboard', 'dashboard')
    ->name('dashboard')
    ->middleware('auth');


    Route::post('/register/create', 'create_user');
    Route::post('/login/user', 'login_user');

});

Route::controller(CrudController::class)->group(function(){
    Route::post('/users/dashboard/update_info_view', 'update_info_view');
    Route::post('/users/dashboard/update_info_updated/{id}', 'update_info_save');
});