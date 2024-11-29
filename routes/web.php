<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Income_detailController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\Sale_detailController;
use App\Http\Controllers\SaleController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Rutas de nuestra app
    //Route::resource('/dashboard/post',PostController::class);
    Route::resource('/dashboard/article',ArticleController::class);
    Route::resource('/dashboard/category',CategoryController::class);
    Route::resource('/dashboard/person',PersonController::class);
    Route::resource('/dashboard/income',IncomeController::class);
    Route::resource('/dashboard/role',RoleController::class);
    //Route::resource('/dashboard/article',Sale_detailController::class);
    //Route::resource('/dashboard/article',SaleController::class);
});


require __DIR__.'/auth.php';
