                                
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
Route::post('/custom-login', [AuthController::class, 'login'])->name('custom-login');
Route::get('login', 'AuthController@login')->name('auth.login');                          

Auth::routes();

    Route::group(['middleware'=>'auth'], function() {
     
        Route::get('/inicio', function () {
        return view('inicio');
        });

        Route::get('/ubicacion', function () {
            return view('ubicacion');
        });

        Route::get('/contacto', [App\Http\Controllers\contactoController::class, 'index']);
        Route::get('/carta', [App\Http\Controllers\cartaController::class, 'index']);
        Route::get('/mesas', [MesaController::class, 'index']);
        Route::post('/mesas/{mesa}', [MesaController::class, 'reservar']);

        
        Route::group(['middleware'=>['auth','role:admin']], function() {
            Route::get('/create', [App\Http\Controllers\cartaController::class, 'create'])->name('create');
            Route::post('/store', [App\Http\Controllers\cartaController::class, 'store'])->name('store');
        
            Route::get('/edit/{id}', [App\Http\Controllers\cartaController::class, 'edit'])->name('edit');
            Route::post('/update/{id}', [App\Http\Controllers\cartaController::class, 'update'])->name('update');

            Route::post('/store', [App\Http\Controllers\cartaController::class, 'store'])->name('store');
            Route::get('/destroy/{id}', [App\Http\Controllers\cartaController::class, 'destroy'])->name('destroy');

            Route::get('/editmesa/{id}', [App\Http\Controllers\MesaController::class, 'edit'])->name('edit');
            Route::post('mesas/update/{id}', [App\Http\Controllers\MesaController::class, 'update'])->name('updatem');

            Route::get('/editcont/{id}', [App\Http\Controllers\contactoController::class, 'edit'])->name('edit');
            Route::post('contacto/update/{id}', [App\Http\Controllers\contactoController::class, 'update'])->name('updatec');
        });

    });
