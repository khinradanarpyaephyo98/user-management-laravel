<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\UsersController;
use App\Http\Controllers\RolesController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/users', [App\Http\Controllers\UsersController::class, 'index'])->name('users.index');
Route::post('/users/create', [App\Http\Controllers\UsersController::class, 'index'])->name('users.create');
Route::get('/users/create', [App\Http\Controllers\UsersController::class, 'fetch'])->name('users.fetch');

Route::get('/roles', [App\Http\Controllers\RolesController::class, 'index'])->name('roles.index');
Route::post('/roles/create', [App\Http\Controllers\RolesController::class, 'create'])->name('roles.create');
Route::get('/roles/create', [App\Http\Controllers\RolesController::class, 'fetch'])->name('roles.fetch');