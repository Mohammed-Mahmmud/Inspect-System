<?php

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\Lifting\ExaminationController;
use App\Http\Controllers\Dashboard\Lifting\MpiController;
use App\Http\Controllers\Dashboard\Lifting\ShakleSizeController;
use App\Http\Controllers\Dashboard\Tublar\MudJarController;
use App\Http\Controllers\Dashboard\Tublar\ToolsController;
use App\Http\Controllers\Dashboard\Tublar\TublarSummaryController;
use App\Http\Controllers\Dashboard\Tublar\TubsController;
use FontLib\Table\Type\name;
use Illuminate\Support\Facades\Route;


Route::name('reports.')->prefix('Reports')->group(
    function () {
        Route::post('Delete-All', [DashboardController::class, 'deleteAll'])->name('deleteAll');
        Route::post('Search/{type?}', [DashboardController::class, 'search'])->name('search');
    }
);
// lifting reports 1)MPI
Route::name('mpi.')->prefix('MPI')->group(function () {
    Route::post('Filter', [MpiController::class, 'filter'])->name('reports.filter');
    Route::get('Download/{id}', [MpiController::class, 'download'])->name('reports.download');
    Route::get('Repeat/{id}', [MpiController::class, 'repeat'])->name('reports.repeat');
    Route::post('Download-All', [MpiController::class, 'downloadAll'])->name('reports.downloadAll');
    Route::resource('Reports', MpiController::class)->names('reports');
});

// Examination
Route::name('examination.')->prefix('Thorough-Examination')->group(function () {
    Route::get('Download/{id}', [ExaminationController::class, 'download'])->name('reports.download');
    Route::get('Repeat/{id}', [ExaminationController::class, 'repeat'])->name('reports.repeat');
    Route::post('Filter', [ExaminationController::class, 'filter'])->name('reports.filter');
    Route::resource('Shakle-Size', ShakleSizeController::class)->names('shaklesize');
    Route::resource('Reports', ExaminationController::class)->names('reports');
});

//   mud jar
Route::name('mud-jar.')->prefix('Mud-Jar')->group(function () {
    Route::post('Filter', [MudJarController::class, 'filter'])->name('reports.filter');
    Route::get('Download/{id}', [MudJarController::class, 'download'])->name('reports.download');
    Route::get('Repeat/{id}', [MudJarController::class, 'repeat'])->name('reports.repeat');
    Route::resource('Reports', MudJarController::class)->names('reports');
});

// tools (pin*pin || box*pin || box*box)
Route::name('tools.')->prefix('Tools')->group(function () {
    Route::get('Download/{id}', [ToolsController::class, 'download'])->name('reports.download');
    Route::get('Repeat/{id}', [ToolsController::class, 'repeat'])->name('reports.repeat');
    Route::post('Filter', [ToolsController::class, 'filter'])->name('reports.filter');
    Route::resource('Reports', ToolsController::class)->names('reports');
});

//Tubs (heavy-weight + drill collar + Drill pipe)
Route::name('tubs.')->prefix('Tubs')->group(function () {
    Route::get('Download/{id}', [TubsController::class, 'download'])->name('reports.download');
    Route::get('Repeat/{id}', [TubsController::class, 'repeat'])->name('reports.repeat');
    Route::post('Filter', [TubsController::class, 'filter'])->name('reports.filter');
    Route::resource('Reports', TubsController::class)->names('reports');
});

//     summary reports
Route::get('Download/Tublar-summary/{id}', [TublarSummaryController::class, 'download'])->name('tools-summary.download');
Route::post('Search/Tublar-summary/', [TublarSummaryController::class, 'search'])->name('tools-summary.search');
Route::resource('Tublar-summary', TublarSummaryController::class)->names('tools-summary');
