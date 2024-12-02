<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthenticatedSessionController;
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

//Route::domain(env('ADMIN_DOMAIN', 'admin.localhost'))->name('admin.')->group(function () {
//    Route::get('login', [AuthenticatedSessionController::class, 'create'])
//        ->name('login');
//
//    Route::post('login', [AuthenticatedSessionController::class, 'store']);
//
//    Route::middleware(['authAdmin:admin'])->group(function () {
//        Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
//    });
//});
