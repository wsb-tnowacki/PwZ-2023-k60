<?php

use App\Http\Controllers\StartController;
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

/* Route::get('/', function () {
    return view('layout');
})->name('start'); */


/* Route::get('/kontakt', function () {
    return view('ogolny.kontakt');
})->name('kontakt'); */


/* Route::get('/onas', function () {
    $zadania =[
        'Zadanie 1',
        'Zadanie 2',
        'Zadanie 3'
    ];
    return view('ogolny.onas', ['zadania' => $zadania]);
})->name('onas'); */

Route::get('/kontakt', [StartController::class, 'kontakt'])->name('kontakt');
Route::get('/', [StartController::class, 'start'])->name('start');
Route::get('/onas', [StartController::class, 'onas'])->name('onas');
