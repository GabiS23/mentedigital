<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisitaController;
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
Route::get("inicio_index", [VisitaController::class, "inicio_index"])->name('inicio_index');
Route::get("branding_index", [VisitaController::class, "branding_index"])->name('branding_index');
Route::get("grafico_index", [VisitaController::class, "grafico_index"])->name('grafico_index');
Route::get("tiktok_index", [VisitaController::class, "tiktok_index"])->name('tiktok_index');
Route::get("fotografia_index", [VisitaController::class, "fotografia_index"])->name('fotografia_index');
Route::get("audiovisual_index", [VisitaController::class, "audiovisual_index"])->name('audiovisual_index');
Route::get("web_index", [VisitaController::class, "web_index"])->name('web_index');
Route::get("nosotros_index", [VisitaController::class, "nosotros_index"])->name('nosotros_index');
Route::get("equipo_index", [VisitaController::class, "equipo_index"])->name('equipo_index');
Route::get("contacto_index", [VisitaController::class, "contacto_index"])->name('contacto_index');
