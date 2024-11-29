<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UtamaController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\LianController;
use App\Http\Controllers\ZidaneController;
use App\Http\Controllers\IrfanController;
use App\Http\Controllers\SyefdiController;
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

Route::get('/halo', function () {
    return 'Halo, Laravel!';
});

// Irfan
// Return hasil dari 80*40/2
// Route::get('/irfan', function() {
//     return 'hasil nya adalah' . (80*40/2);
// });

Route::get('/irfan', [IrfanController::class, 'index'])->name('irfan.index');
Route::get('/irfan/blog', [IrfanController::class, 'blog'])->name('irfan.blog');
Route::get('irfan/contoh/{name?}', [IrfanController::class, 'contoh'])->name('irfan.contoh');
// /syefdi
// Return hasil dari 80*20/4
Route::get('/syefdi', [SyefdiController::class, 'index'])->name('syefdi.index');
Route::get('/syefdi/syefdi/{nama?}', [SyefdiController::class, 'syefdi'])->name('syefdi.contoh-view');
Route::get('/syefdi/blog', [SyefdiController::class, 'blog'])->name('syefdi.blog');

// Zidane
// Return hasil dari 1000*32/4
Route::get('/zidane', [ZidaneController::class, 'index'])->name('zidane.index');
Route::get('/zidane/contoh-view/{name?}', [ZidaneController::class, 'CopyView'])->name('zidane.contoh-view');
Route::get('/zidane/blog', [ZidaneController::class , 'blog'])->name('zidane.blog');


Route::get('/lian', [LianController::class, 'index'])->name('lian.index');
Route::get('/lian/contoh-view/{nama?}', [LianController::class, 'contohView'])->name('lian.contoh-view');
Route::get('/lian/blog', [LianController::class, 'blog'])->name('lian.blog');



// Route::get('/invoices', [InvoiceController::class, 'index'])->name('invoice.index');

