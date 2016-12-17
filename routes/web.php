<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/redirect', [
  'uses' => 'SocailAuthController@redirect',
  'as' => 'fb.redirect'
]);
Route::get('/callback', [
  'uses' => 'SocailAuthController@callback',
  'as' => 'fb.callback'
]);
Route::get('/', [
  'uses' => 'ProductController@getIndex',
  'as' => 'product.index'
]);
Route::get('/add-to-cart/{id}', [
  'uses' => 'ProductController@getAddToCart',
  'as' => 'product.addtocart'
]);
Route::get('/reduce/{id}', [
  'uses' => 'ProductController@getReduceByOne',
  'as' => 'product.reducebyone'
]);
Route::get('/reduceall/{id}', [
  'uses' => 'ProductController@getRemoveitem',
  'as' => 'product.reduceall'
]);
Route::get('/shoppin-cart', [
  'uses' => 'ProductController@getCart',
  'as' => 'product.shoppinCart'
]);
Route::get('/checkout', [
  'uses' => 'ProductController@getCheckout',
  'as' => 'checkout'
]);
Route::post('/checkout', [
  'uses' => 'ProductController@postCheckout',
  'as' => 'checkout'
]);

Route::group(['prefix' => 'user'], function(){
  Route::group(['middleware' => 'auth'], function(){
    Route::get('/profile', [
      'uses' => 'UserController@getProfile',
      'as' => 'user.profile'
    ]);
    Route::get('/logout', [
      'uses' => 'UserController@getLogout',
      'as' => 'user.logout'
    ]);
    Route::get('/checkout', [
      'uses' => 'ProductController@getCheckout',
      'as' => 'checkout'
    ]);
    Route::post('/checkout', [
      'uses' => 'ProductController@postCheckout',
      'as' => 'checkout'
    ]);
  });
  Route::group(['middleware' => 'guest'], function(){
    Route::get('/signup', [
      'uses' => 'UserController@getSignup',
      'as' => 'user.signup'
    ]);
    Route::post('/signup', [
      'uses' => 'UserController@postSignup',
      'as' => 'user.signup'
    ]);
    Route::get('/signin', [
      'uses' => 'UserController@getSignin',
      'as' => 'user.signin'
    ]);
    Route::post('/signin', [
      'uses' => 'UserController@postSignin',
      'as' => 'user.signin'
    ]);
  });

});



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

