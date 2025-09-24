<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SynonymsController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [SynonymsController::class, 'index'])->name('main');
Route::get('/letters/letter', [SynonymsController::class, 'showWordsByLetter'])->name('show.words');
Route::get('/words/{slug}', [SynonymsController::class, 'showWord'])->name('show.word');
Route::get('/search', [SynonymsController::class, 'search'])->name('search');