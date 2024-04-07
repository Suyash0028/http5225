<?php

use App\Http\Controllers\AnimalsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('animals/trash/{id}', [AnimalsController::class, 'trash'])->name('animals.trash');

Route::get('animals/trashed', [AnimalsController::class, 'trashed'])->name('animals.trashed');

Route::get('animals/restore/{id}', [AnimalsController::class, 'trash'])->name('animals.restore');

Route::resource('animals', AnimalsController::class);