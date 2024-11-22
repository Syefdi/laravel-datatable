<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UtamaController;
use App\Http\Controllers\InvoiceController;
use App\Models\Product;
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

// Route::get('/', function () {
//     return view('content/index');
// });

Route::get('/artikel', [ArticleController::class, 'index'])->name('artikel.index');
Route::post('/artikel-store', [ArticleController::class, 'store'])->name('artikel.store');
Route::put('/artikel/{id}', [ArticleController::class, 'update'])->name('artikel.update');
Route::delete('/artikel-delete/{id}', [ArticleController::class, 'destroy'])->name('artikel.destroy');
Route::get('/artikel/{id}/edit', [ArticleController::class, 'edit'])->name('artikel.edit');


Route::resource('/', UtamaController::class);
Route::resource('/products', ProductController::class);
Route::resource('/invoices', InvoiceController::class);

// /syefdi
// Route::get('/invoices', [InvoiceController::class, 'index'])->name('invoice.index');
