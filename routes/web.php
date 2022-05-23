<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Comidas;
use App\Models\Recetas;
use App\Models\Recetas_Creadas;
use App\Models\Recetas_Guardadas;
/*
 *
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
Route::get('usuarios', function () {
    return User::All();
});
Route::get('comidas', function () {
    return Comidas::All();
});
Route::get('recetas', function () {
    return Recetas::All();
});
Route::get('recetas_guardadas', function () {
    return Recetas_Guardadas::All();
});
Route::get('recetas_creadas', function () {
    return Recetas_Creadas::All();
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
