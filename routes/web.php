<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthenticatedSessionController as AdminAuthenticatedSessionController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\ProductController;

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
    return view('users.home');
});

Route::get('/product/detail', [ProductController::class, 'show'])->name('product.detail');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::prefix("admin")->name("admin.")->group(function () {
    Route::get('login', [AdminAuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('login', [AdminAuthenticatedSessionController::class, 'store']);
    Route::middleware('authAdmin:admin')->name("admin.")->group(function () {
        Route::get('dashboard', [AdminHomeController::class, 'index']);

        Route::get('product/list', 'AdminProductController@list')->name('product.list');
        Route::get('product/add', [AdminProductController::class, 'add'])->name('product.add');
        Route::post('product/store', [AdminProductController::class, 'store'])->name('product.store');

        Route::middleware(['authAdmin:admin'])->group(function () {
            Route::post('logout', [AdminAuthenticatedSessionController::class, 'destroy'])->name('logout');
        });
    });
});

require __DIR__.'/auth.php';
