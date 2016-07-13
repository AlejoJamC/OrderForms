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

/*
 * Routes for Login in this case is the entry point or index
 */
Route::get('/login', 'SessionController@gotoLogin');
Route::get('/register', 'SessionController@gotoRegister');

/*
 * Routes for Login in this case is the entry point or index
 */

Route::get('/', [
    'middleware' => 'auth',
    'uses' => 'HomeController@index'
]);

/*
 * Routes for history
 */
Route::get('/dash','HistoryController@redirectTo');
Route::get('/dash/history','HistoryController@redirectTo');
Route::get('/dash/history/me','HistoryController@index');
Route::get('/dash/history/ajax-me','HistoryController@index');
Route::get('/dash/history/all','HistoryController@listAll');
Route::get('/dash/history/ajax-all','HistoryController@listAllAjax');


/*
 * Routes for Orders
 */
Route::get('/dash/orders','OrdersController@redirectTo');
Route::get('/dash/orders/new','OrdersController@index');

/*
 * Routes for Products
 */
Route::get('/dash/products','ProductsController@redirectTo');
Route::get('/dash/products/list','ProductsController@index');
Route::get('/dash/products/load','ProductsController@load');

/*
 * Routes for Users
 */
Route::get('/dash/users','UsersController@redirectTo');
Route::get('/dash/users/list','UsersController@index');
Route::get('/dash/users/new','UsersController@register');
Route::get('/dash/users/reset/password','UsersController@reset');
Route::get('/profile','UsersController@profile');
Route::get('/dash/users/new/ajax-city', 'UsersController@ajaxCity');

Route::post('/dash/users/new','UsersController@postRegister');

/*
 * Routes for Order Details
 */
Route::get('/dash/orders/details','OrderDetailController@index');