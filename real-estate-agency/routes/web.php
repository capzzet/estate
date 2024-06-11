<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\BuildingsController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\ReviewsController;
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


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/catalog', [CatalogController::class, 'index'])->name('catalog');
Route::get('/property/{id}', [CatalogController::class, 'show'])->name('property.show');
Route::get('/buildings', [BuildingsController::class, 'index'])->name('buildings');
Route::get('/for-sale', [SaleController::class, 'index'])->name('for-sale');
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts');
Route::get('/reviews', [ReviewsController::class, 'index'])->name('reviews');
