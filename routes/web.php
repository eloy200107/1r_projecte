                                
<?php

use App\Http\Controllers\AuthController;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/ubicacion', function () {
    return view('ubicacion');
});

Route::get('/reserva', function () {
    return view('reserva');
});
Route::get('/contacto', function () {
    return view('contacto');
});
Route::get('/carta', function () {
    return view('carta');
});
Route::get('/inicio', function () {
    return view('inicio');
});
Route::get('/pedidos', function () {
    return view('pedidos');
});
