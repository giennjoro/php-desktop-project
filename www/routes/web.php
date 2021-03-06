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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/reviews', 'PagesController@reviews');
Route::get('/portfolio','PagesController@port');
Route::get('/contact','PagesController@contact');
Route::get('/services','PagesController@services');
Route::get('/web-design','PagesController@web_design');
Route::get('/digital-marketing','PagesController@digital_marketing');
Route::get('/graphics-design','PagesController@graphics_design');

//contact us
Route::post('contact-us', ['as'=>'contactus.store','uses'=>'ContactUsController@store']);

//Post Routes
Route::post('/', 'PagesController@subscriber_store');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
    
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('users', 'UsersController');
    Route::resource('clients', 'ClientsController');
    Route::resource('sliders', 'SlidersController');
    Route::resource('partners', 'PartnersController');
    Route::resource('metatags', 'MetatagsController');
    Route::resource('webpages', 'WebpagesController');
    Route::resource('subscribers', 'SubscribersController');
    Route::resource('todo','HomeController');

});


// Route::get('/users', [
//     'uses' => 'usersController@index',
//     'as' => 'users.index'
// ]);
// Route::get('/users/create', [
//     'uses' => 'usersController@create',
//     'as' => 'users.create'
// ]);
// Route::post('/users', [
//     'uses' => 'usersController@store',
//     'as' => 'users.store'
// ]);
// Route::get('/users/{slug}', [
//     'uses' => 'usersController@show',
//     'as' => 'users.show'
// ]);
// Route::get('/users/{slug}/edit', [
//     'uses' => 'usersController@edit',
//     'as' => 'users.edit'
// ]);
// Route::post('/users/{slug}', [
//     'uses' => 'usersController@update',
//     'as' => 'users.update'
// ]);
// Route::delete('/users/{slug}', [
//     'uses' => 'usersController@destroy',
//     'as' => 'users.destroy'
// ]);