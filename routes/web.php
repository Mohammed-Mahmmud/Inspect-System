<?php

use App\Http\Controllers\Auth\FrontLoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Website\FrontCompanyController;
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

Route::redirect('/', '/client');
Route::middleware('guest:client')->group(function () {
    Route::get('login', [FrontLoginController::class, 'create']);
    Route::post('login', [FrontLoginController::class, 'store'])->name('frontend.login');
});

Route::prefix('client')
    ->name('frontend.')
    ->middleware('isClient')
    ->group(function () {
        Route::get('/', [FrontCompanyController::class, 'show'])->name('company');
    });
