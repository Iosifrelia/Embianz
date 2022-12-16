<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;

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
Route::get('/', fn () => view('home'))->name('home');

Route::middleware(['splade'])->group(function () {
    
    Route::get('/docs', fn () => view('docs'))->name('docs');

    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
   
    // Registers routes to support Table Bulk Actions and Exports...
    Route::spladeTable();

    // Registers routes to support async File Uploads with Filepond...
    Route::spladeUploads();
});

route::get('/redirect', [HomeController::class, 'redirect'])->middleware('auth','verified')->name('redirect');
route::get('/category', CategoryController::class)->name('category');
route::post('/add_category', AdminController::class)->name('add_category');

