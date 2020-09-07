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
Route::get('/contact_us', 'HomeController@contact_us')->name('contact_us');
Route::get('/user/credential', 'HomeController@user_credential')->name('user_credential');

//shurjopay-payment-route
Route::get('/shurjopay', 'PaymentController@index')->name('payment.index');
Route::post('/shurjopay', 'PaymentController@post')->name('payment.post');

//payment success
Route::get('/get', 'PaymentController@paymentsuccess')->name('success.view');
//post
Route::post('/status/post', 'PaymentController@paymentstatus')->name('status.view');

//admitcard
Route::get('/admit/{id}', 'PaymentController@admit')->name('admit.index');
Route::get('student/exam', 'ExamController@index')->name('exam.index');


//admin

Route::get('/admin', 'AdminController@index')->name('admin.index');
Route::get('/admin/admit/{id}', 'AdminController@admin_admit')->name('admin.admit');
Route::get('/admin/student_list', 'AdminController@student_list')->name('admin.student_list');
Route::get('/admin/student/syncTable', 'AdminController@studentSyncTable')->name('admin.student.synctable');