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

Route::resource('/', 'HomeController');

Auth::routes();

Route::group(array('middleware' => ['auth'], 'prefix' => 'dashboard'), function()
{
    Route::get('/', 'Dashboard\DashboardController@index');
    /*
     * DASHBOARD PREDICTIONS
     */
    Route::resource('/predictions', 'PredictionController');
    /*
     * DASHBOARD  USERS
     */
    Route::resource('/users', 'UserController');
    /*
     * DASHBOARD  BOOKMAKERS
     */
    Route::resource('/bookmakers', 'BookmakerController');
    /*
     * DASHBOARD PAGES
     */
    Route::resource('/pages', 'PageController');
});


Route::get('/pages/{slug}', 'PageController@show');


Route::get('logout', 'Auth\LoginController@logout');




