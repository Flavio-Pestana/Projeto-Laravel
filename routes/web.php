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
//todos os produtos
Route::get('/produtos', [ProductController::class, 'index'])->name('index');

//criar produto
Route::get('/criar-produto', [ProductController::class, 'create'])->name('create');
Route::post('/produtos', [ProductController::class, 'storage'])->name('storage');
Route::get('/produtos/{id}', [ProductController::class, 'show'])->name('show');

//editar produto
Route::get('/produtos/{id}/editar', [ProductController::class, 'edit'])->name('edit');
Route::put('/produtos/{id}', [ProductController::class, 'update'])->name('update');

//deletar produto
Route::delete('/produtos/{id}', [ProductController::class, 'delete'])->name('delete');

