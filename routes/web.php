<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

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
    return view('content/index');
});

Route::get('/artikel', [ArticleController::class, 'index'])->name('artikel.index');
Route::post('/artikel-store', [ArticleController::class, 'store'])->name('artikel.store');
Route::put('/artikel/{id}', [ArticleController::class, 'update'])->name('artikel.update');
Route::get('/artikel/{id}/edit', [ArticleController::class, 'edit'])->name('artikel.edit');
Route::delete('/artikel-delete/{id}', [ArticleController::class, 'destroy'])->name('artikel.destroy');

