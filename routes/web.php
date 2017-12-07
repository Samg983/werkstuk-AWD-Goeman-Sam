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

// GET routes

Route::get('/', [
    'uses' => 'BlogPostController@index',
    'as' => 'home'
]);

Route::get('/admin', [
    'uses' => 'BlogPostController@getAdminIndex',
    'as' => 'admin.index',
    'middleware' => 'auth'
]);

Route::get('/home', 'HomeController@index')->name('home');

//POST routes

Route::post('like', [
    'uses' => 'BlogPostController@postLike',
    'as' => 'blogpost.like'
]);

//RESOURCES routes

Route::resources([
    'blogposts' => 'BlogPostController'
]);

// OAuth Routes
Route::get('login/github', 'AuthController@redirectToProvider')->name("login.github");
Route::get('login/github/callback', 'AuthController@handleProviderCallback');

Auth::routes();

// languages Routes

Route::get('lang/{lang}', [
    'uses'=>'LanguageController@switchLang',
    'as'=>'lang.switch',
]);




