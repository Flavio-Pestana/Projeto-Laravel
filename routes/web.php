<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/criar-produto', [ProductController::class, 'create']);
Route::post('/produtos', [ProductController::class, 'create']);
//Route::view('/produto/criar', 'createProduct');
//Route::view('/produtos', 'products');
