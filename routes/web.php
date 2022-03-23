<?php

use App\Http\Controllers\MessagesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
DB::listen(function($query){
    // echo "<pre>{$query->sql}</pre>";
});


Route::get('/', [PagesController::class, 'home' ]) -> name('home') ->middleware('example');

Route::get('saludos/{nombre?}', [PagesController::class, 'saludo' ]) -> name('saludos') ->where('nombre', "[A-Za-z]+");

Route::resource('mensajes', MessagesController::class);
Route::resource('usuarios', UsersController::class);

Auth::routes(['verify' => true]);



// Route::get('mensajes', [MessagesController::class, 'index' ]) -> name('messages.index');
// Route::get('mensajes/create', [MessagesController::class, 'create' ]) -> name('messages.create');
// Route::post('mensajes', [MessagesController::class, 'store' ]) -> name('messages.store');
// Route::get('mensajes/{id}', [MessagesController::class, 'show' ]) -> name('messages.show');
// Route::get('mensajes/{id}/edit', [MessagesController::class, 'edit' ]) -> name('messages.edit');
// Route::put('mensajes/{id}', [MessagesController::class, 'update' ]) -> name('messages.update');
// Route::delete('mensajes/{id}', [MessagesController::class, 'destroy' ]) -> name('messages.destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
