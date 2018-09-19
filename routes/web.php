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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::group(['middleware' => 'mymiddleware'], function () { 
  
  Route::get('/dashboard', 'HomeController@index')->name('dashboard');

  Route::get('logout', 'MasterController@logout');

  Route::get('/addclient', 'MasterController@add');
  Route::get('/addclientdetails', 'MasterController@adddetails');
  Route::post('/details','MasterController@store');
  //dd(1);
  Route::get('/dashboard','MasterController@view_record');
  Route::get('/delete/{id}','MasterController@destroy');
  Route::get('/record','ClientController@view_record');
  //Route::get('/record','ClientController@view_record');
  Route::get('/delete/{id}','ClientController@destroy');
  Route::get('/edit/{id}','ClientController@update');
  Route::post('/update','ClientController@updateusers');
 Route::get('/view/{id}','ClientController@view2');
  Route::get('/viewclient','ClientController@view');

});

  
