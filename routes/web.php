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

Route::get('/', 'ProjectController@index');


Route::get('/CreateProject','ProjectController@create_step1');
Route::resource('project', 'ProjectController');
Route::post('/CreateProject/create','ProjectController@create');
Route::get('/CreateProject/success',function(){

    return view('project.success');
});

Route::get('/project/{id}/show','ProjectController@show');


Route::get('/login', function(){

    return view('member.login');
});

Route::get('/register', 'ProjectController@index')->name('verify');


Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


