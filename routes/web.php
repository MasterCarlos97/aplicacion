<?php

Route::view('/','auth.login')->name('login');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/contact','ContactController@index')->name('contact');