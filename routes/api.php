<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'api'], function () {
    Route::group(['prefix' => 'usersrider'], function () {
        Route::group(['prefix' => 'rider'], function () {
            Route::get('test', function () {
                return [];
            });
        });
        Route::group(['prefix' => 'task'], function () {
            Route::get('test', function () {
                return [];
            });
        });
    });
});

