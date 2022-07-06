<?php

use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\SessionsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;


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
    return view('home');
});

Route::get('/login', [SessionsController::class, 'create'])
        ->name('login.index');

Route::put('/login', [SessionsController::class, 'store'])
        ->name('login.store');

Route::post('/login', [SessionsController::class, 'destroy'])
        ->name('login.destroy');

Route::get('/register', [UsuarioController::class, 'create'])
        ->name('register.index');

Route::post('/register', [UsuarioController::class, 'store'])
        ->name('register.store');



/*Route::get('/admin',[AdminsController::class, 'index'])
    ->middleware('auth.admin')
    ->name('admin.index');*/


