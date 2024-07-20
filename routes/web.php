<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController; 
use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\PageController;

// User
Route::get('/', [HomeController::class, 'index']);
Route::get('/trangchu', [HomeController::class, 'index']);

// 
// Route::get('/trangchu/danh-muc-sp/{id}', [HomeController::class, 'showCategoryHome'])->name('category.show');


// Route::resource('pages',HomeController::class);
// Route::get('/', [HomeController::class, 'index'])->name('pages.index');
// Route::get('/pages/list', [HomeController::class, 'list'])->name('pages.list');
// Books
Route::resource('books', BookController::class);
// Danh mục 
Route::resource('categories', CategoryController::class);
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::get('/categories/{id}', [CategoryController::class, 'show'])->name('categories.show');