<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\Form\TesteController;

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

Route::get('/', [PostController::class, 'showForm'])->name('showForm');

Route::post('/debug', [PostController::class, 'debug'])->name('debug');

Route::resource('usuarios', UserController::class)
    ->names('user')
    ->parameters(['usuarios' => 'user']);

Route::resource('enderecos', AddressController::class)
    ->names('address')
    ->parameters(['enderecos' => 'address']);

Route::resource('artigos', PostController::class)
    ->names('post')
    ->parameters(['artigos' => 'post']);

// Route::resource('usuarios', TesteController::class)
//     ->names('user')
//     ->parameters(['usuarios' => 'user']);
