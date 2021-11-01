<?php

use Illuminate\Support\Facades\Route;

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
    return view('contenedor/visita/inicio');
});
Route::get("/inicio_index", [VisitaController::class, "inicio_index"])->name('inicio_index');
Route::get("/branding_index", [VisitaController::class, "branding_index"])->name('branding_index');
Route::get("/contacto_index", [VisitaController::class, "contacto_index"])->name('contacto_index');
