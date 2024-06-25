<?php

use App\Http\Controllers\Home\MainController;
use App\Http\Controllers\Profile\ProfileController;
use App\Http\Controllers\Word\SearchController;
use App\Http\Controllers\Word\WordController;
use Illuminate\Support\Facades\Request;
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

Route::controller(MainController::class)->name('main.')->group(function(){
    Route::get('/', 'home')->name('home');
});



Route::middleware('auth')->controller(WordController::class)->group(function(){
    Route::get('word/by-letter/{letter}', 'show_letter')->name('word.letter');
    Route::get('word/show/{word}', 'show')->name('word.show');
    Route::resource('word', WordController::class)->except('show');
});



Route::controller(SearchController::class)->name('search.')->group(function(){
    Route::post('/search', 'search')->name('search');
    Route::get('/result', 'result')->name('result');
});




// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware(['auth'])->controller(ProfileController::class)->name('profile.')->group(function () {
    Route::get('/profile', 'index')->name('profile');
    Route::post('/update/{user}', 'index')->name('update');
});


require __DIR__.'/auth.php';
