<?php

use App\Http\Controllers\AnimalsController;
use App\Http\Controllers\FeedingScheduleController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/auth/login');
});

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
    Route::get('animals/trash/{id}', [AnimalsController::class, 'trash'])->name('animals.trash');

    Route::get('animals/trashed', [AnimalsController::class, 'trashed'])->name('animals.trashed');

    Route::get('animals/restore/{id}', [AnimalsController::class, 'trash'])->name('animals.restore');

    Route::resource('animals', AnimalsController::class);

    Route::get('feedingSchedules/trash/{id}', [FeedingScheduleController::class, 'trash'])->name('feedingSchedules.trash');

    Route::get('feedingSchedules/trashed', [FeedingScheduleController::class, 'trashed'])->name('feedingSchedules.trashed');

    Route::get('feedingSchedules/restore/{id}', [FeedingScheduleController::class, 'trash'])->name('feedingSchedules.restore');

    Route::resource('feedingSchedules', FeedingScheduleController::class);
});
