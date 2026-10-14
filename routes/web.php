<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('blogs', [BlogController::class, 'index']);

Route::get('/contact', function () {
    $company = 'circusje';
    return view('contact', [
        'company' => $company
    ]);
});

Route::get('products/{id}', function (int $id) {
    return view('products', [
        'id' => $id
    ]);
})->name('product.show');


require __DIR__ . '/auth.php';
