<?php

use App\Models\Tour;
use Illuminate\Support\Facades\Route;

Route::prefix(LaravelLocalization::setLocale())
    ->middleware([
        // 'localeSessionRedirect',
        // 'localizationRedirect',
        // 'localeViewPath',
    ])
    ->group(function () {

        Route::get('/', 'WelcomeController@index')->name('welcome');

        Route::get('/home', 'HomeController@index')->name('home');

        Route::get('tour/{id}', function ($id) {
            $tour = Tour::findOrFail($id);
            return view('tour', compact('tour'));
        })->name('tours');

        Auth::routes();
    });
