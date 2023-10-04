                                
<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('welcome');
});

//Route::get('/', [AuthController::class, 'index'])->name('home');
Route::post('/custom-login', [AuthController::class, 'login'])->name('custom-login');
Route::get('/logados', [AuthController::class, 'logados'])->name('logados');
                            
                        
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
