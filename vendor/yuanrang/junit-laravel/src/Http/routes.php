<?php

Route::get('/', 'SjunitController@index');
Route::post('/', 'SjunitController@store')->name('sjunit.store');

Route::get('test', 'TestController@index');