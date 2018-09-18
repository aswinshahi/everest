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
    return view('front/index');
});

Route::get('/contact', function () {
    return view('front/contact');
});

Route::get('/latestproducts', function () {
    return view('front/latest_products');
});

Route::get('/aboutus', function () {
    return view('front/aboutus');
});

Route::get('/portfolio', 'FrontController@portfolio');
Route::get('/products/{id}', 'FrontController@productList');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('product','ProductController');

Route::get('/product/edit/{id}', 'ProductController@edit');
Route::post('/product/update', 'ProductController@update');
Route::post('/product/store', 'ProductController@store');
Route::post('/sendmessage', ['as' => 'sendmessage','uses'=>'FrontController@sendMessage']);

Route::resource('category','CategoryController');
Route::resource('setting','SettingController');

Route::get('profile', function(){
    return view('profile');
});

/* View Composer*/
View::composer(['*'], function($view){
    
    $user = Auth::user();
    $view->with('user',$user);
    

    

});

