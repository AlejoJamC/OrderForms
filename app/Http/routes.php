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

/*
 * Routes for Login in this case is the entry point or index
 */
//Route::auth();
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');

/*
 * Routes for States
 */
Route::get('/dash/departamento','StateController@index');

/*
 * Routes for Cities
 */
Route::get('/dash/ciudades','CitiesController@index');

/*
 * Routes for Roles
 */
Route::get('/dash/roles','RolesController@index');

/*
 * Routes for Order states
 */
Route::get('/dash/estados/ordenes','OrderStatesController@index');

/*
 * Routes for Products
 */
Route::get('/dash/productos','ProductsController@index');

/*
 * Routes for Users
 */
Route::get('/dash/usuarios','UsersController@index');

/*
 * Routes for Orders
 */
Route::get('/dash/ordenes','OrdersController@index');

/*
 * Routes for Order Details
 */
Route::get('/dash/orden/detalle','OrderDetailController@index');
