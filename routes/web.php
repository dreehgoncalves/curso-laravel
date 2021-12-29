<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Form\TestController;

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
    return view('welcome');
});

Route::get('/usuarios', [TestController::class, 'listAllUsers'])->name(
    'users.listAll'
);

Route::get('/usuarios/novo', [TestController::class, 'formAddUser'])->name(
    'users.formAddUser'
);

Route::get('/usuarios/editar/{user}', [TestController::class, 'formEditUser'])->name(
    'users.formEditUser'
);

Route::get('/usuarios/{user}', [TestController::class, 'listUser'])->name(
    'users.listUser'
);

Route::post('/usuarios/store', [TestController::class, 'storeUser'])->name(
    'users.storeUser'
);

Route::put('/usuarios/edit/{user}', [TestController::class, 'editUser'])->name(
    'users.editUser'
);

Route::delete('/usuarios/destroy/{user}', [TestController::class, 'destroy'])->name(
    'users.destroy'
);
