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
Route::get('/','LoginController@index');

/*
 * Routes for States
 */
Route::get('/admin/departamento','StateController@index');

/*
 * Routes for Cities
 */
Route::get('/admin/ciudades','CitiesController@index');

/*
 * Routes for Roles
 */
Route::get('/admin/roles','RolesController@index');

/*
 * Routes for Order states
 */
Route::get('/admin/estados/ordenes','OrderStatesController@index');

/*
 * Routes for Products
 */
Route::get('/admin/productos','ProductsController@index');

/*
 * Routes for Users
 */
Route::get('/admin/usuarios','UsersController@index');

/*
 * Routes for Orders
 */
Route::get('/admin/ordenes','OrdersController@index');

/*
 * Routes for Order Details
 */
Route::get('/admin/orden/detalle','OrderDetailController@index');
