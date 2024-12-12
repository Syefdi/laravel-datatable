<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DashboardController;
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
//     return view('dashboard/index');
// });

Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');

Route::get('/artikel', [ArticleController::class, 'index'])->name('artikel.index');
Route::post('/artikel-store', [ArticleController::class, 'store'])->name('artikel.store');
Route::put('/artikel/{id}', [ArticleController::class, 'update'])->name('artikel.update');
Route::delete('/artikel-delete/{id}', [ArticleController::class, 'destroy'])->name('artikel.destroy');
Route::get('/artikel/{id}/edit', [ArticleController::class, 'edit'])->name('artikel.edit');

// Route::resource('/', UtamaController::class);
Route::resource('/products', ProductController::class);
Route::resource('/invoices', InvoiceController::class);

Route::get('/halo', function () {
    return 'Halo, Laravel!';    
});

// Irfan
// Middleware check data
Route::prefix('irfan')->name('irfan.')->middleware('irfancheck')->group(function () {
    Route::get('/', [IrfanController::class, 'index'])->name('index');
    Route::get('/blog', [IrfanController::class, 'blog'])->name('blog');
    Route::get('/contoh/{name?}', [IrfanController::class, 'contoh'])->name('contoh');
    Route::get('/login', [IrfanController::class, 'login'])->name('login');
    Route::post('/auth', [IrfanController::class, 'authLogin'])->name('auth');
});
// /syefdi
// Middleware check data
Route::middleware(['syefdicek'])->prefix('syefdi')->name('syefdi.')->group(function () {
    Route::get('/', [SyefdiController::class, 'index'])->name('index');
    Route::get('/syefdi/{nama?}', [SyefdiController::class, 'syefdi'])->name('contoh-view');
    Route::get('/blog', [SyefdiController::class, 'blog'])->name('blog');
    Route::get('/login', [SyefdiController::class, 'login'])->name('login');
    Route::post('/login-action', [SyefdiController::class, 'loginAction'])->name('login-action');

});
// Zidan
// Middleware check data
Route::middleware(['zidanecheck'])->prefix('zidane')->name('zidane.')->group(function () {
    Route::get('/', [ZidaneController::class, 'index'])->name('index');
    Route::get('/contoh-view/{name?}', [ZidaneController::class, 'CopyView'])->name('contoh-view');
    Route::get('/blog', [ZidaneController::class , 'blog'])->name('blog');
    Route::get('/login', [ZidaneController::class, 'login'])->name('login');
    Route::post('/login-action', [ZidaneController::class, 'loginAction'])->name('login-action');
});

// Lian
Route::prefix('lian')->name('lian.')->group(function () {
    Route::get('/', [LianController::class, 'index'])->name('index');
    Route::get('/contoh-view/{nama?}', [LianController::class, 'contohView'])->name('contoh-view');
    Route::get('/blog', [LianController::class, 'blog'])->name('blog');
    Route::get('/login', [LianController::class, 'login'])->name('login');
    Route::post('/login-action', [LianController::class, 'loginAction'])->name('login-action');
});
Route::get('/logout', function () {
    Auth::logout();
});

// Route::get('/invoices', [InvoiceController::class, 'index'])->name('invoice.index');

