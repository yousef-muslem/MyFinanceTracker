<?php

use App\Http\Controllers\IncomeCategoryController;
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

Route::get('/dashboard', function () {
    return view('index');
});

Route::prefix('dashboard')->name('dashboard.')->group(function () {
    Route::view('/', 'index')->name('index');
    Route::get('income-category', [IncomeCategoryController::class, 'index'])->name('income-category.index');
});


require __DIR__.'/auth.php';