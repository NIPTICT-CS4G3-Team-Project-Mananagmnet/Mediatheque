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

Route::get('/admin/layout', function (){
    return view('admin.layout');
});

Route::get('/guest', 'GuestController@index');

Route::get('/admin/upload_multiple_pictures', function (){
    return view('admin.upload_multiple');
});

Route::post('/admin/upload_multiple_pictures', 'AdminController@uploadMultiplePictures');

Route::post('/update_session', 'Controller@updateSession');
