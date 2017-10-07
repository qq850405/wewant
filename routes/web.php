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
    return view('index');
});


Route::get('/CreateProject','ProjectController@index');
Route::resource('project', 'ProjectController');
Route::post('/CreateProject/create','ProjectController@create');

Route::get('/login', function(){

    return view('member.login');
});

Route::get('/register', 'ProjectController@index')->name('verify');


Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



