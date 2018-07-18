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
    return view('auth.login');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Backend
route::view('/admin','auth.adminLogin')->middleware('auth');
route::view('/index','Backend.index')->middleware('auth');
route::view('/notifications','Backend.notifications')->middleware('auth');

        //categories
        route::resource('/admin/categories','Backend\CategoryController')->middleware('auth');

        //posts
        route::resource('/admin/posts','Backend\PostController')->middleware('auth');

        //comments
        route::resource('/admin/comments','Backend\CommentsController')->middleware('auth');

        //users
        route::resource('/admin/users','Backend\UserController')->middleware('auth');


//Frontend

