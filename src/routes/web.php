<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::group(['namespace' => 'Toalamin\Contact\Http\Controllers','middleware' => 'web'], function() {
    Route::get('/contact', 'ContactController@index');
    Route::post('/contactsus', 'ContactController@send')->name('contactsusForm');
});


