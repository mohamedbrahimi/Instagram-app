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



use Illuminate\Http\Request;
Route::group(['middleware' => 'web'],function(){

	Route::get('/', function () {
    return view('welcome');
    });

    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/userprofil', 'HomeController@user')->name('home');
    Route::get('/icons', 'HomeController@icons')->name('home');
    Route::get('/notifications', 'HomeController@notifications')->name('home');
    Route::get('/maps', 'HomeController@maps')->name('home');
    Route::get('/table', 'HomeController@table')->name('home');
    Route::get('/template', 'HomeController@template')->name('home');
    Route::get('/typography', 'HomeController@typography')->name('home');
    Route::get('/upgrade', 'HomeController@upgrade')->name('home');

    Route::get('/redirect', 'SocialAuthController@redirect');
    Route::get('/callback', 'SocialAuthController@callback');

    Route::post('/upload', 'UploadController@uploadSubmit');
    Route::get('/export', 'manipulatData@getUserProductsPhoto');
    
    Route::get('/showImage/{url}', 'manipulatData@showImage');

    Route::get('/admin/{type}','adminController@redirect')->middleware('isAdmin');
    Route::get('/changeMediaStat','manipulatData@changeStatOfMedia');

    Route::get('/like','manipulatData@reactMedia');
    Route::get('/unlike','manipulatData@reactMedia');


    


});


