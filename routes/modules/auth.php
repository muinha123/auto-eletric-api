<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::namespace('Auth')
    ->prefix('auth')
    ->group(function () {
        Route::post('login', ['as' => 'auth.login', 'uses' => 'LoginController@login']);
    });
