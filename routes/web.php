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
    return view('welcome2');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/reportar','HomeController@getreport');
Route::get('/reportar','HomeController@postreport');


Route::group(['middleware' => 'admin','namespace'=>'Admin'],function()
{
    Route::get('/usuarios','UserController@index');
    Route::get('/proyectos','ProjectController@index');
    Route::get('/config','ConfigController@index');

});

