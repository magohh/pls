<?php
use App\Http\Controllers\TodolistController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



Route::get('/',[PageController::class,'home'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/',[TodolistController::class,'index'])->name('index');
Route::post('/',[TodolistController::class,'store'])->name('store');
Route::delete('/{todolist:id}',[TodolistController::class,'destroy'])->name('destroy');

require __DIR__.'/auth.php';
