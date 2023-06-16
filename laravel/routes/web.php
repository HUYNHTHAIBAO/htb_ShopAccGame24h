<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\AccountController;
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
//Frontend

// Backend
Route::prefix('admin')->group(function () {
    Route::any('/login', [AccountController::class, 'login'])->name('backend.account.login');
    Route::any('/logout', [AccountController::class, 'logout'])->name('backend.account.logout');
    Route::group(['middleware' => 'backend'], function () {
        Route::get('/', [HomeController::class, 'index'])->name('backend.home.index');
        Route::prefix('category')->group(function () {
            Route::get('/', [CategoryController::class, 'index'])->name('backend.category.index');
            Route::any('/create', [CategoryController::class, 'create'])->name('backend.category.create');
            Route::any('/store', [CategoryController::class, 'store'])->name('backend.category.store');
            Route::any('/edit{id}', [CategoryController::class, 'edit'])->name('backend.category.edit');
            Route::any('/update{id}', [CategoryController::class, 'update'])->name('backend.category.update');
            Route::any('/destroy{id}', [CategoryController::class, 'destroy'])->name('backend.category.destroy');
        });
    });
});
