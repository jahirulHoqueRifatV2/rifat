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

Route::get('/home',function(){
    return view('home');
});
Route::get('/about',function(){

    $articles = App\Article::take('3')->get();

    return view('about',compact('articles'));
});


Route::get('/articles','ArticleController@index');
Route::post('/articles','ArticleController@store');
Route::get('/articles/create','ArticleController@create');
Route::get('/articles/{article}','ArticleController@show');
Route::get('/articles/{article}/edit','ArticleController@edit');
Route::put('/articles/{article}','ArticleController@update');
