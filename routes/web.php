<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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



Auth::routes();


Route::get('/', function() {
    return view('auth/login');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('/despesas', [App\Http\Controllers\ControladorDespesa::class, 'index']); 
Route::get('/despesas/novo', [App\Http\Controllers\ControladorDespesa::class, 'create']); 
Route::post('/despesas', [App\Http\Controllers\ControladorDespesa::class, 'store']); 
Route::get('/despesas/apagar/{id}', [App\Http\Controllers\ControladorDespesa::class, 'destroy']);
Route::get('/despesas/editar/{id}', [App\Http\Controllers\ControladorDespesa::class, 'edit']);
Route::post('/despesas/{id}', [App\Http\Controllers\ControladorDespesa::class, 'update']);



Route::get('/receitas', [App\Http\Controllers\ControladorReceita::class, 'index']); 
Route::get('/receitas/novo', [App\Http\Controllers\ControladorReceita::class, 'create']); 
Route::post('/receitas', [App\Http\Controllers\ControladorReceita::class, 'store']); 
Route::get('/receitas/apagar/{id}', [App\Http\Controllers\ControladorReceita::class, 'destroy']);
Route::get('/receitas/editar/{id}', [App\Http\Controllers\ControladorReceita::class, 'edit']);
Route::post('/receitas/{id}', [App\Http\Controllers\ControladorReceita::class, 'update']);

