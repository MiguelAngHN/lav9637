<?php

use App\Http\Controllers\HallarPrimo;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('suma/{num1}/{num2}', [OperacionController::class,'SUMAA']);

// Route::get('primo/{Num1}', [HallarPrimo::class,'Primo']);

Route::get('login', [LoginController::class,'index']);

Route::post('login', [LoginController::class,'store'])->name('login.store');

Route::get('login/create', [LoginController::class,'create']);