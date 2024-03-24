<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index']);
Route::get('/hello', [IndexController::class, 'show']);

Route::put('/listing/{listing}', [ListingController::class, 'update'])->name('listing.update');
Route::delete('/listing/{listing}', [ListingController::class, 'destroy'])->name('listing.destroy');
Route::resource('listing', ListingController::class);



