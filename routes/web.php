<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/recruitment', ['as' => 'user.recruitment', 'uses' => 'UserController@recruitment']);
Route::post('/recruitment', ['as' => 'user.recruitmentPost', 'uses' => 'UserController@recruitmentPost']);
Route::get('/ajax/{idTheLoai}', ['as' => 'user.search', 'uses' => 'SearchController@search']);
Route::get('/ajaxtc/{idTheLoai}', ['as' => 'user.searchtc', 'uses' => 'SearchController@searchtc']);
Route::get('html_email/{ppto}', ['as' => 'user.html_email', 'uses' => 'MailController@html_email']);
Route::get('exp/{mail}', ['as' => 'user.xuatfile', 'uses' => 'UserController@xuatfile']);

Route::get('login',['as'=>'getLogin','uses'=>"admin\adminController@getLogin"]);
Route::post('login',['as'=>'getLogin','uses'=>"admin\adminController@postLogin"]);
Route::get('logout',['as'=>'getLogout','uses'=>'admin\adminController@getLogout']);

Route::group(['middleware'=>'auth'],function(){
    Route::group(['prefix'=>'dvh_admin'],function(){
       Route::get('/',function(){
          return view('admin.index');
       });
    });
});

