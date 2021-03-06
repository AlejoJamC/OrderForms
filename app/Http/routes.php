<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// TODO: Avoid only spanish routes
// TODO: Improve the use of nouns and reorder the routes
// TODO: Fix the problem with Request:is('route') to show on the same level
// TODO: Build a helper to manage active menu 
// TODO: Fix custom login and register using default version
// TODO: Create it own file for ajax javascript
// TODO: Create some file or table to manage easy role settings

/*
 * Routes for Login in this case is the entry point or index
 */
Route::auth();

Route::post('/login', 'Auth\AuthController@postLogin');

Route::get('/login', 'Auth\AuthController@login');
Route::get('/logout', 'Auth\AuthController@logout');
Route::get('/register', 'Auth\AuthController@gotoRegister');

/*
 * Routes for Login in this case is the entry point or index
 */

Route::get('/', 'HistoryController@redirectToLogin');

/*
 * Routes for history
 */
Route::get('/dash','HistoryController@redirectTo');
Route::get('/dash/history','HistoryController@redirectTo');
Route::get('/dash/history/me','HistoryController@index');
Route::get('/dash/history/all','HistoryController@listAll');

Route::get('/dash/history/ajax-me','HistoryController@listMeAjax');
Route::get('/dash/history/ajax-all','HistoryController@listAllAjax');

/*
 * Routes for Orders
 */
Route::get('/dash/orders','OrdersController@redirectTo');
Route::get('/dash/orders/new','OrdersController@index');
Route::get('/dash/orders/{id}','OrdersController@details');

Route::post('/dash/orders/new','OrdersController@postOrder');

Route::patch('/dash/orders/{id}','OrdersController@patchOrderState');

/*
 * Routes for Order Details
 */
Route::get('/dash/details/ajax-order','OrdersController@ajaxOrderDetail');

/*
 * Routes for Products
 */
Route::get('/dash/products','ProductsController@redirectTo');
Route::get('/dash/products/new','ProductsController@newProduct');
Route::get('/dash/products/list','ProductsController@index');
Route::get('/dash/products/load','ProductsController@load');
Route::get('/dash/products/details/{id}','ProductsController@details');

Route::get('/dash/products/ajax-list','ProductsController@ajaxList');
Route::get('/dash/products/ajax-light-list','ProductsController@ajaxList');
Route::get('/dash/products/ajax-product-by-id','ProductsController@ajaxProductById');

Route::post('/dash/products/new','ProductsController@postProduct');

Route::patch('/dash/products/details/{id}','ProductsController@patchProduct');

/*
 * Routes for Users
 */
Route::get('/dash/users','UsersController@redirectTo');
Route::get('/dash/users/list','UsersController@index');
Route::get('/dash/users/new','UsersController@register');
Route::get('/profile/{id}','UsersController@profile');
Route::get('/dash/users/detail/{id}','UsersController@userDetail');
Route::get('/dash/users/ajax-list','UsersController@ajaxList');
Route::get('/dash/users/new/ajax-city', 'UsersController@ajaxCity');

Route::post('/dash/users/new','UsersController@postRegister');
Route::post('/dash/users/add/image','UsersController@postLogo');

Route::patch('/profile/{id}','UsersController@patchProfile');
Route::patch('/dash/users/detail/{id}','UsersController@patchProfile');
Route::patch('/dash/users/load/image/{id}','UsersController@patchImage');
Route::patch('/dash/users/reset/pass/{id}','UsersController@resetPassword');