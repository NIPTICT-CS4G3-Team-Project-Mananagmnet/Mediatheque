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

Route::get('/admin/layout', function () {
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
// Route::resource('profile', 'ProfileController');

Route::get('/account/edit', function (){
    return view('profile.edit');
});

Route::post('/{profile_id}/profile_update', 'ProfileController@update');
Route::post('/admin/{id}/submit_profile','ProfileController@submit_image');
Route::resource('/contact','ContactController');

// Route::get('/search/photo', function () {
//     return view('guests.photos.index');
// });

// Route::get('/search/album', function (){
//     return view('guests.albums.index');
// });
Route::resource('/album','AlbumController');
Route::resource('/photo','PhotoController');

Route::get('/admin/upload_multiple_pictures', function (){
    return view('admin.upload_multiple');
});

Route::view('/admin/upload_single_picture', 'admin/upload_single');
Route::post('/upload_single', 'SingleFormController@upload');
Route::post('/add_new_category', 'SingleFormController@addNewCategory');
Route::get('/admin/image_page', 'SingleFormController@showImage');
Route::get('/admin/edit_image_page/{id}', 'SingleFormController@edit');
Route::put('/admin/update_image/{id}', 'SingleFormController@update');


Route::post('/update_session', 'Controller@updateSession');
