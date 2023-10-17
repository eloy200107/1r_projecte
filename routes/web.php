                                
<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MesaController;
use App\Http\Controllers\cartaController;
use App\Http\Controllers\contactoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('auth.login');
});

//Route::get('/', [AuthController::class, 'index'])->name('home');
Route::post('/custom-login', [AuthController::class, 'login'])->name('custom-login');
//Route::get('/logados', [AuthController::class, 'logados'])->name('logados');
Route::get('login', 'AuthController@login')->name('auth.login');                          
                        
Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/ubicacion', function () {
    return view('ubicacion');
});


Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/carta', [App\Http\Controllers\cartaController::class, 'index']);

Route::get('/contacto', [App\Http\Controllers\contactoController::class, 'index']);

Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/edit/{id}', [App\Http\Controllers\cartaController::class, 'edit'])->name('edit');

Route::get('/mesas', [App\Http\Controllers\MesaController::class, 'index'])->name('mesas');
Route::get('/reserva', [App\Http\Controllers\MesaController::class, 'index'])->name('reserva');
Route::post('/update/{id}', [App\Http\Controllers\cartaController::class, 'update'])->name('update');
Route::post('/store', [App\Http\Controllers\cartaController::class, 'store'])->name('store');



