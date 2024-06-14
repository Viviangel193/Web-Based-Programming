<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Soal Nomor 1
Route::get('/soal-nomor-1', 'No1DesimalController@tampilDesimal');

// Soal Nomor 2
Route::get('/halaman-a', 'No2FormController@tampilForm')->name('form');
Route::post('/halaman-b', 'No2FormController@submitForm')->name('submitForm');

Route::get('/soal-nomor-3-form', 'No3PaymentController@tampilForm')->name('paymentForm');
Route::post('/soal-nomor-3-hasil', 'No3PaymentController@hitungPembayaran')->name('hitungPembayaran');

Route::get('/student', 'StudentController@index');
Route::get('/student/gpa-tertinggi', 'StudentController@GpaTertinggi');
Route::get('/student/search', 'StudentController@search');
