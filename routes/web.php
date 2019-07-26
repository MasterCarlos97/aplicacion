<?php

Route::view('/','auth.login')->name('login');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');