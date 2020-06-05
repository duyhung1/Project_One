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

Route::group(['prefix'=>'admin', 'namespace'=>'Admin'], function() {
    Route::get('',['as'=>'admin.index', 'uses'=> 'adminController@index']);

    Route::get('product', ['as'=>'admin.product', 'uses'=>'ProductController@index']);
    Route::get('product/create', ['as'=>'admin.addProduct', 'uses'=>'ProductController@create']);
    Route::post('product/create', ['as'=>'create.product', 'uses'=>'ProductController@store']);

    Route::get('product/edit/{id}', ['as'=>'admin.editProduct', 'uses'=>'ProductController@edit']);
    Route::post('product/edit/{id}', ['as'=>'admin.updateProduct', 'uses'=>'ProductController@update']);

    Route::get('product/delete/{id}', ['as'=>'admin.deleteProduct', 'uses'=>'ProductController@destroy']);

    Route::get('test', function() {
        return view('admin.layouts_admin.index');
    });

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
