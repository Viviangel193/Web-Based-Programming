<?php

Route::get('/1', "PageController@no1");
Route::get('/2', 'PageController@no2');
Route::post('/2kirim', 'PageController@o2kirim');
Route::get('/2a', 'PageController@o2tampil');

Route::get('/3', 'PageController@no3');
Route::post('/3', 'PageController@calculateTotal');

Route::get('/4', 'PageController@no4');
Route::get('/search', 'PageController@searchByName');
