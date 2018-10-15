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
Route::get('/Tag', 'TagController@index')->name('Tag');
Route::get('/TagAdd', 'TagController@create')->name('AddTag');
Route::post('/TagStore', 'TagController@store')->name('StoreTag');
Route::get('/getQue/{id}', 'QuestionController@index')->name('getQuestion');
Route::get('/QueAdd/{id}', 'QuestionController@create')->name('AddQuestion');
Route::post('/QueStore', 'QuestionController@store')->name('StoreQue');
Route::get('/getAns/{id}', 'AnswerController@index')->name('getAnswers');
Route::get('/addAns/{id}', 'AnswerController@create')->name('AddAnswer');
Route::post('/AnsStore', 'AnswerController@store')->name('StoreAns');
