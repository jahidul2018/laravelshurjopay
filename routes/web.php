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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//shurjopay-payment-route
Route::get('/shurjopay', 'PaymentController@index')->name('payment.index');
Route::post('/shurjopay', 'PaymentController@post')->name('payment.post');

//payment success
Route::get('/get', 'PaymentController@paymentsuccess')->name('success.view');
//post
Route::post('/status/post', 'PaymentController@paymentstatus')->name('status.view');


//admitcard
Route::get('/admit', 'PaymentController@admit')->name('admit.index');
Route::get('student/exam', 'ExamController@index')->name('exam.index');
