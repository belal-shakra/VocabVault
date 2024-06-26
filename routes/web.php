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


Route::middleware('auth')->group(function(){

    Route::controller(MainController::class)->name('main.')->group(function(){
        Route::get('/', 'home')->name('home');
    });



    Route::controller(WordController::class)->group(function(){
        Route::get('word/by-letter/{letter}', 'show_letter')->name('word.letter');
        Route::get('word/edit/{word}', 'edit')->name('word.edit');
        Route::post('word/save/{word}', 'save')->name('word.save');
        Route::resource('word', WordController::class)->except(['edit']);
    });



    Route::controller(SearchController::class)->name('search.')->group(function(){
        Route::post('/search', 'search')->name('search');
        Route::get('/result', 'result')->name('result');
    });


    Route::controller(ProfileController::class)->name('profile.')->group(function () {
        Route::get('/profile', 'index')->name('profile');
        Route::post('/profile/update/{user}', 'update')->name('update');
        Route::delete('/profile/{user}', 'destroy')->name('destroy');
    });
});


require __DIR__.'/auth.php';
