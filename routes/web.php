<?php

use App\Page;
use App\Thread;
use Illuminate\Support\Facades\Route;
use App\User;
use App\Like;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web rou'tes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index')->name('home');
Route::get('/page/{id}', 'HomeController@show')->name('show_page');
Route::get('/page_delete/{id}' , 'AdminController@destroy')->name('page.destroy');
Route::post('/page_update' , 'AdminController@update')->name('page.update');
Route::get('find' , 'HomeController@find');
Route::get('/test' , function () {
    return view('testing');
});
Route::get('autocomplete',['as'=>'autocomplete','uses'=>'HomeController@autocomplete']);

// Admin Controllers

Route::get('/admin' , 'AdminController@index')->name('admin');
Route::get('/admin/pages/{page}' , 'AdminController@show')->name('admin.show_page');
Route::get('/admin/pages/create/{parent_id}/{is_root}' , 'AdminController@create');
Route::post('/admin/pages' , 'AdminController@store');
Route::delete('/admin/pages/{page}' , 'AdminController@destroy');
Route::get('/admin/pages/{page}/edit' , 'AdminController@edit')->name('admin.page.edit');
Route::put('/admin/pages/{page}' , 'AdminController@update');
Route::put('/update_best_answer/{answer}' , 'ThreadsController@update_best_answer')->name('update_best_answer');



// Forum
Route::get('/forum' , 'ThreadsController@home')->name('threads.home');
Route::resource('threads' , 'ThreadsController');

Route::auth();


Route::get('/redirect_back_to_login' , 'RedirectController@forumlogin')->name('redirect');
Route::post('like' , 'ThreadsController@threadLikeThread')->name('like');
