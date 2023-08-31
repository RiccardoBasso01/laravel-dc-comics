<?php

use App\Http\Controllers\ComicsController;
use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class, 'home'])->name('home');


Route::get('/comics', [ComicsController::class, 'index'])->name('comics.index'); // Rotta per vedere tutti i comic
Route::get('/comics/create', [ComicsController::class, 'create'])->name('comics.create'); // Rotta per vedere il form di creazione
Route::get('/comics/{comic}', [ComicsController::class, 'show'])->name('comics.show'); // Rotta per vedere il singolo comic
Route::get('/comics/{comic}/edit', [ComicsController::class, 'edit'])->name('comics.edit'); // Rotta per vedere il form di modifica
Route::post('/comics', [ComicsController::class, 'store'])->name('comics.store'); // Invio dati di creazione al db
Route::put('/comics/{comic}', [ComicsController::class, 'update'])->name('comics.update'); // Invio dati di modifica al db
Route::delete('/comics/{comic}', [ComicsController::class, 'destroy'])->name('comics.destroy'); // Cancellazione dati dal db
