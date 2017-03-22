<?php

Auth::loginUsingId(1);

Auth::routes();

Route::get('/home', 'HomeController@index');
