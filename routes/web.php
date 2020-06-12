<?php

use Illuminate\Support\Facades\Route;

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
// ------------------------------------------------------------------------------------
Route::get('admin/login', ['as'=>'admin.login', 'uses'=>'Admin\UserController@getLogin']);
Route::post('admin/login', ['as'=>'admin.login', 'uses'=>'Admin\UserController@postLogin']);
Route::get('admin/logout', ['as'=>'admin.logout', 'uses'=>'Admin\UserController@getLogout']);

Route::group(['prefix'=>'admin', 'namespace'=>'Admin', 'middleware' =>'adminLogin'], function() {
    Route::get('',['as'=>'admin.index', 'uses'=> 'adminController@index']);
    
    Route::get('lang/{lang}',['as'=>'lang', 'uses'=>'LangController@changeLang']);
    
    Route::group(['prefix'=>'product'], function(){
        Route::get('', ['as'=>'admin.product', 'uses'=>'ProductController@index']);

        Route::get('create', ['as'=>'admin.addProduct', 'uses'=>'ProductController@create']);
        Route::post('create', ['as'=>'create.product', 'uses'=>'ProductController@store']);

        Route::get('edit/{id}', ['as'=>'admin.editProduct', 'uses'=>'ProductController@edit']);
        Route::post('edit/{id}', ['as'=>'admin.updateProduct', 'uses'=>'ProductController@update']);

        Route::get('delete/{id}', ['as'=>'admin.deleteProduct', 'uses'=>'ProductController@destroy']);
    });
    Route::group(['prefix'=>'user'], function(){
        Route::get('', ['as'=>'admin_user', 'uses' =>'UserController@index']);

        Route::get('create', ['as'=>'admin.addUser', 'uses'=>'UserController@create']);
        Route::post('create', ['as'=>'create.user', 'uses'=>'UserController@store']);

        Route::get('edit/{id}', ['as'=>'admin.editUser', 'uses'=>'UserController@edit']);
        Route::post('edit/{id}', ['as'=>'admin.updateUser', 'uses'=>'UserController@update']);

        Route::get('delete/{id}', ['as'=>'admin.deleteUser', 'uses'=>'UserController@destroy']);
    });

    Route::get('test', function() {
        return view('admin.layouts_admin.index');
    });

});
// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/admin', 'HomeController@index')->name('home');
