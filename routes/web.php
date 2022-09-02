<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProyectoController;
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

Route::get('/',[App\Http\Controllers\PortafolioController::class, 'index'] );

Auth::routes();

Route::resource('/proyectos', App\Http\Controllers\ProyectoController::class); //ruta completa -- accede a todos los métodos del controlador

// Route::get('/rutaprueba', [ProyectoController::class, 'create']); //accede a un determinado método del controlador

// Route::resource('/rutaprueba2', ProyectoController::class); //accede a todos los métodos del controlador



// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
