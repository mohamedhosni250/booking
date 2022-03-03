<?php

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
            return view('tour');
        });

        Auth::routes();
    });
