<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\SearchController;

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

Route::get('/catalog', [CatalogController::class, 'get_categories']);
Route::get('/catalog/products/{category?}/{subcategory?}', [CatalogController::class, 'get_goods'])->name('get_goods');
// Route::get('/catalog/{category}', [CatalogController::class, 'get_category_goods']);
Route::post('/catalog/search_process', [SearchController::class, 'get_search_goods'])->name('search_good_process');
Route::get('/catalog/search_process', [SearchController::class, 'get_search_goods'])->name('search_good_process');