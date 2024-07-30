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

// Route::get('/', function () {
//     return view('frontendPage');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// Route::redirect('/', '/login');
// Route::middleware(['auth' => 'client'])->group(function () {

Route::get('login', [FrontLoginController::class, 'create']);
Route::post('login', [FrontLoginController::class, 'store'])->name('frontend.login');
Route::group(
    ['middleware' => ['auth:client']],
    function () {
        // Route::get('/', [FrontCompanyController::class, 'show'])->name('frontend.company');
        Route::post('/{id?}', [FrontCompanyController::class, 'show'])->middleware('auth:company')->name('frontend.company');
    }
);
