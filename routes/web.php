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

Route::get('/', 'HomePageController@index');

Route::get('/home', function (){
    return 'This is my home';
});

Route::get('/user/{id}/{name?}', function ($id, $name="Oboy") {
    return 'Your id is ' .$id. ' and your name is '.$name;
})->where('id', '[0-9]+');

Route::get('/about', ['uses'=>'AboutController@about', 'as'=>'about']);
Route::view('/contact', 'contact');