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
Route::get('/home',function(){
    return redirect('/admin/layout');
  })->name('home');

Route::get('/guest', 'GuestController@index');

Auth::routes();
//  Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin/layout', function (){
        return view('admin.layout');
    });
});
Route::resource('profile', 'ProfileController');

Route::get('/profile/edit', function (){
    return view('profile.edit');
});
// Route::Post('/{profile_id}/update_profile', 'ProfileController@update');