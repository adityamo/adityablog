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
//User Routes
Route::group(['namespace' => 'User'],function()
    {
        Route::get('/','HomeController@index');
        Route::get('/post','PostController@post')->name('post');

    });

//Admin  Routes

Route::group(['namespace' => 'Admin'],function()
   {
       Route::get('admin/home','HomeController@index')->name('admin.home');

       // User Route

       Route::resource('admin/user','UserController');
       // Post Route 

       Route::resource('admin/post','PostController');

       // Category Route

       Route::resource('admin/category','CategoryController');

       // Tag Route
       
       Route::resource('admin/tag','TagController');
   });

    

