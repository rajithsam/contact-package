<?php

Route::group(['namespace' => 'Radius\Contact\Http\Controllers'], function()
{
    Route::get('contact', 'ContactController@index')->name('contact');

    Route::post('contact', 'ContactController@store');
});
