<?php

use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\EnvioController;

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

//Spatie
Route::group(['middleware' => ['auth']], function(){
    Route::resource('roles', RolController::class);
    Route::resource('usuario', UsuarioController::class);
});

Route::get('/', [DashboardController::class, 'index'])->middleware(['auth', 'verified']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/error', function () {
    abort(500);
});

Route::get('/auth/redirect/{provider}', [SocialiteController::class, 'redirect']);

Route::get('/filtroasig', [App\Http\Controllers\DashboardController::class, 'filtroasig'] )->name('filtroasig');
Route::get('/filtroruta', [App\Http\Controllers\DashboardController::class, 'filtroruta'] )->name('filtroruta');
Route::get('/filtroentregado', [App\Http\Controllers\DashboardController::class, 'filtroentregado'] )->name('filtroentregado');
Route::get('/filtrofallido', [App\Http\Controllers\DashboardController::class, 'filtrofallido'] )->name('filtrofallido');
Route::get('/filtronoentregado', [App\Http\Controllers\DashboardController::class, 'filtronoentregado'] )->name('filtronoentregado');
Route::get('/filtroreprogramado', [App\Http\Controllers\DashboardController::class, 'filtroreprogramado'] )->name('filtroreprogramado');
Route::get('/filtrocambio', [App\Http\Controllers\DashboardController::class, 'filtrocambio'] )->name('filtrocambio');

Route::get('/detalles/{id}', [App\Http\Controllers\DashboardController::class, 'detalles'] )->name('detalles');


//usuarios
//Route::get('/usuarios/lista', [App\Http\Controllers\DashboardController::class, 'usuarios'] )->name('indexuser') ;

Route::get('/usuarios/lista', [App\Http\Controllers\UsuarioController::class, 'index'] )->name('indexuser') ;
Route::get('/guardaruser', [App\Http\Controllers\UsuarioController::class, 'guardaru'] )->name('guardaru') ;


Route::post('/upload', [UploadController::class, 'upload'])->name('upload');
Route::post('/cambiar-estado', [EnvioController::class, 'cambiarEstado'])->name('cambiar.estado');



Route::post('/logout', function () {
    Auth::logout();
    session()->invalidate();
    session()->regenerateToken();
    
    return redirect('/login');
})->name('logout');



require __DIR__.'/auth.php';
