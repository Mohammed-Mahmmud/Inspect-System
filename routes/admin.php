<?php

use App\Http\Controllers\Dashboard\CompanyController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\JobTicketController;
use App\Http\Controllers\Dashboard\OrderController;
use App\Http\Controllers\Dashboard\Profile\UserController;
use App\Http\Controllers\Dashboard\RigController;
use App\Http\Controllers\Dashboard\Profile\RoleController;
use App\Http\Controllers\Report\Settings;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;



/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
 */

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
    ],
    function () {

        require __DIR__ . '/auth.php';

        Route::redirect("register", "login"); //Dashboard Routes
        Route::prefix(env("PANEL"))->middleware('auth')->group(function () {

            require __DIR__ . '/report.php';
            Route::resource('/', DashboardController::class)->names('mainDashboard');
            Route::resource('Users', UserController::class)->names('users');
            Route::resource('Companies', CompanyController::class)->names('company');
            Route::resource('Rigs', RigController::class)->names('rig');
            Route::prefix('JobTicket')->group(function () {
                Route::get('Download/{id}', [JobTicketController::class, 'download'])->name('jobTicket.download');
                Route::resource('Reports', JobTicketController::class)->names('jobTicket');
            });
            Route::resource('settings', Settings::class)->names('report_settings');
            Route::resource('JobTicketNumber', OrderController::class)->names('order');
            // Route::resource('checklists', CheckListController::class)->names('checklist');

            //            role-permission
            Route::resource('roles', RoleController::class)->names('dashboard.roles');
            //            end role-permission

        });
    }
);
