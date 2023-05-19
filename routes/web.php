<?php

use App\Http\Controllers\PartaiController;
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

Route::get('/', function () {
    return view('welcome');
});

// route::resource('/kandidat', 'PartaiController');

Route::resource('/kandidat', PartaiController::class);

// Route::get('/kandidat', [PartaiController::class]);

// Route::get('/kandidat', [PartaiController::class, 'index'])->name('kandidiat.index');
// Route::get('/kandidat/create', [PartaiController::class, 'create'])->name('kandidiat.create');
// Route::post('/kandidat/store', [PartaiController::class, 'store'])->name('kandidiat.store');
// Route::get('/kandidat/show', [PartaiController::class, 'show'])->name('kandidiat.show');
// Route::get('/kandidat/edit', [PartaiController::class, 'edit'])->name('kandidiat.edit');
// Route::post('/kandidat/update', [PartaiController::class, 'update'])->name('kandidiat.update');
// Route::delete('/kandidat/destroy', [PartaiController::class, 'destroy'])->name('kandidiat.delete');
