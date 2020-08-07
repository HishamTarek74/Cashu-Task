<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'v1/hotels', 'namespace' => 'Api\V1'], function () {

    Route::get('getAll', 'HotelsController@index');
    Route::get('provider', 'HotelsController@providers');

});