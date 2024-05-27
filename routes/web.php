<?php

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::view('', 'index')->name('index');
Route::view('about-me', 'about')->name('about');
Route::view('job-experience', 'job-experience')->name('experience');
Route::get('my-portfolio', [\App\Http\Controllers\PortfolioController::class, 'index'])->name('my-portfolio.index');
Route::get('my-portfolio/{item}', [\App\Http\Controllers\PortfolioController::class, 'show'])->name('my-portfolio.show');
