<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\documentController;

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

Route::get('login', function () {
    return redirect('admin/login');
})->name('login');

Route::get('/', function () {
    return redirect('admin');
});

Route::get('maintenance', function () {
    return view('errors.maintenance');
})->name('errors.maintenance');

Route::group(['prefix' => 'admin', 'middleware' => 'desarrollo.creativo'], function () {
    Voyager::routes();
    Route::get('Imprimir/{id}', [documentController::class,"printdoc"])->name('document.print');
});

// Clear cache
Route::get('/admin/clear-cache', function() {
    Artisan::call('optimize:clear');
    return redirect('/admin/profile')->with(['message' => 'Cache eliminada.', 'alert-type' => 'success']);
})->name('clear.cache');
