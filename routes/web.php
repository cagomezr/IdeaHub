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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/newtopic', 'HomeController@newTopic')->name('new-topic');
Route::post('/processtopic', 'HomeController@processTopic')->name('process-topic');
Route::post('/deletetopic', 'HomeController@deleteTopic')->name('delete-topic');
Route::post('/processcomment', 'HomeController@processComment')->name('process-comment');
Route::post('/deletecomment', 'HomeController@deleteComment')->name('delete-comment');
Route::get('/topic/{id}','HomeController@getTopic')->name('topic');