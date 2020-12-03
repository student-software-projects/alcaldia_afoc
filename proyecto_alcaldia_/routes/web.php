<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Localidad\LocalidadController;
use App\Http\Controllers\Equipo\EquipoController;
use App\Http\Controllers\Jugador\JugadorController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});*/

Route::get('escritorio',[DashboardController::class,'index'])->name('dashboard.index');

Route::get('/',[LoginController::class,'form_login'])->name('login.form_login');
Route::post('auth',[LoginController::class,'auth'])->name('login.auth');


//ROUTE->Localidad
Route::get('localidad',[LocalidadController::class,'index'])->name('localidad.index');
Route::get('localidad/create',[LocalidadController::class,'create'])->name('localidad.create');
Route::post('localidad',[LocalidadController::class,'store'])->name('localidad.store');
Route::get('localidad/{id}',[LocalidadController::class,'show'])->name('localidad.show');
Route::get('localidad/edit/{id}',[LocalidadController::class,'edit'])->name('localidad.edit');
Route::put('localidad/{id}',[LocalidadController::class,'update'])->name('localidad.update');
Route::delete('localidad/{id}',[LocalidadController::class,'destroy'])->name('localidad.destroy');

//ROUTE->Equipo
Route::get('equipo',[EquipoController::class,'index'])->name('equipo.index');
Route::get('equipo/create',[EquipoController::class,'create'])->name('equipo.create');
Route::post('equipo',[EquipoController::class,'store'])->name('equipo.store');
Route::get('equipo/{id}',[EquipoController::class,'show'])->name('equipo.show');
Route::get('equipo/edit/{id}',[EquipoController::class,'edit'])->name('equipo.edit');
Route::put('equipo/{id}',[EquipoController::class,'update'])->name('equipo.update');
Route::delete('equipo/{id}',[EquipoController::class,'destroy'])->name('equipo.destroy');

//ROUTE->Jugadores

Route::get('jugador',[JugadorController::class,'index'])->name('jugador.index');
Route::get('jugador/create',[JugadorController::class,'create'])->name('jugador.create');
Route::post('jugador',[JugadorController::class,'store'])->name('jugador.store');
Route::get('jugador/{id}',[JugadorController::class,'show'])->name('jugador.show');
Route::get('jugador/edit/{id}',[JugadorController::class,'edit'])->name('jugador.edit');
Route::put('jugador/{id}',[JugadorController::class,'update'])->name('jugador.update');
Route::delete('jugador/{id}',[JugadorController::class,'destroy'])->name('jugador.destroy');

