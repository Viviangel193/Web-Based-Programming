<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\FreelancerController;

Route::get('/', 'PageController@home');
Route::get('/freelancers/search', 'Api\FreelancerController@search');


// Group untuk guest (belum login)
Route::group(['middleware' => ['guest']], function () {
    Route::get('/', 'AuthController@login');
    Route::post('/login', 'AuthController@ceklogin');
});

// Group untuk user yang sudah login
Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'PageController@home');
    Route::get('/freelancer', 'PageController@index');
    Route::get('/freelancer/form-add', 'PageController@create');
    Route::post('/freelancer/save', 'PageController@store');
    Route::get('/freelancer/edit/{id}', 'PageController@edit');
    Route::post('/freelancer/update/{id}', 'PageController@update');
    Route::post('/freelancer/delete/{id}', 'PageController@destroy');
    Route::post('/logout', 'AuthController@logout')->name('logout');
    Route::get('/user', 'PageController@editUser')->name('user.edit');
    Route::post('/user/update', 'PageController@updateUser')->name('user.update');
});
