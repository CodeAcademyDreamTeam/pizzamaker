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
    return view('welcome');
});



/**  ADMIN Permissions */

Route::group(['prefix' => 'admin'], function () {

    /** Cheeses routes */

    Route::group(['prefix' => 'cheeses'], function () {
        Route::get('/', ['as' => 'app.cheeses.list', 'uses' => 'DTCheesesController@index']);
        Route::get('/create', ['uses' => 'DTCheeseController@create']);
        Route::post('/create', ['as' => 'app.cheeses.create', 'uses' => 'DTCheesesController@store']);

    });

    Route::group(['prefix' => '{id}'], function () {

        Route::get('/', ['uses' => 'DTCheesesController@show']);
        Route::get('/edit', ['uses' => 'DTCheesesController@edit']);
        Route::post('/edit', ['as' => 'app.cheeses.update', 'uses' => 'DTCheesesController@update']);
        Route::delete('/delete', ['as' => 'app.cheeses.delete', 'uses' => 'DTCheesesController@destroy']);
    });

    /** Pads routes */

    Route::group(['prefix' => 'pads'], function () {
        Route::get('/', ['as' => 'app.pads.list', 'uses' => 'DTPadsController@index']);
        Route::get('/create', ['uses' => 'DTPadsController@create']);
        Route::post('/create', ['as' => 'app.pads.create', 'uses' => 'DTPadsController@store']);

    });

    Route::group(['prefix' => '{id}'], function () {

        Route::get('/', ['uses' => 'DTPadsController@show']);
        Route::get('/edit', ['uses' => 'DTPadsController@edit']);
        Route::post('/edit', ['as' => 'app.pads.update', 'uses' => 'DTPadsController@update']);
        Route::delete('/delete', ['as' => 'app.pads.delete', 'uses' => 'DTPadsController@destroy']);
    });

    /** Ingredients routes  */

    Route::group(['prefix' => 'ingredients'], function () {
        Route::get('/', ['as' => 'app.ingredients.list', 'uses' => 'DTIngredientsController@index']);
        Route::get('/create', ['uses' => 'DTIngredientsController@create']);
        Route::post('/create', ['as' => 'app.ingredients.create', 'uses' => 'DTIngredientsController@store']);

    });

    Route::group(['prefix' => '{id}'], function () {

        Route::get('/', ['uses' => 'DTPadsController@show']);
        Route::get('/edit', ['uses' => 'DTIngredientsController@edit']);
        Route::post('/edit', ['as' => 'app.ingredients.update', 'uses' => 'DTIngredientsController@update']);
        Route::delte('/delete', ['as' => 'app.ingredients.delete', 'uses' => 'DTIngredientsController@destroy']);
    });


    /** Pizzas routes  */

    Route::group(['prefix' => 'pizzas'], function () {
        Route::get('/', ['as' => 'app.pizzas.list', 'uses' => 'DTPizzasController@index']);
        Route::get('/create', ['uses' => 'DTPizzasController@create']);
        Route::post('/create', ['as' => 'app.pizzas.create', 'uses' => 'DTPizzasController@store']);

    });

    Route::group(['prefix' => '{id}'], function () {

        Route::get('/', ['uses' => 'DTPizzasController@show']);
        Route::get('/edit', ['uses' => 'DTPizzasController@edit']);
        Route::post('/edit', ['as' => 'app.pizzas.update', 'uses' => 'DTPizzasController@update']);
        Route::delete('/delete', ['as' => 'app.pizzas.delete', 'uses' => 'DTPizzasController@destroy']);
    });

    /** Roles routes  */

    Route::group(['prefix' => 'roles'], function () {
        Route::get('/', ['as' => 'app.roles.list', 'uses' => 'DTRolesController@index']);
        Route::get('/create', ['uses' => 'DTRolesController@create']);
        Route::post('/create', ['as' => 'app.roles.create', 'uses' => 'DTRolesController@store']);

    });

    Route::group(['prefix' => '{id}'], function () {

        Route::get('/', ['uses' => 'DTRolesController@show']);
        Route::get('/edit', ['uses' => 'DTRolesController@edit']);
        Route::post('/edit', ['as' => 'app.roles.update', 'uses' => 'DTRolesController@update']);
        Route::delete('/delete', ['as' => 'app.roles.delete', 'uses' => 'DTRolesController@destroy']);
    });

    /** Users routes  */

    Route::group(['prefix' => 'users'], function () {
        Route::get('/', ['as' => 'app.users.list', 'uses' => 'DTUsersController@index']);
        Route::get('/create', ['uses' => 'DTUsersController@create']);
        Route::post('/create', ['as' => 'app.users.create', 'uses' => 'DTUsersController@store']);

    });

    Route::group(['prefix' => '{id}'], function () {

        Route::get('/', ['uses' => 'DTUsersController@show']);
        Route::get('/edit', ['uses' => 'DTUsersController@edit']);
        Route::post('/edit', ['as' => 'app.users.update', 'uses' => 'DTUsersController@update']);
        Route::delete('/delete', ['as' => 'app.users.delete', 'uses' => 'DTUsersController@destroy']);
    });


    /** Users routes  */

    Route::group(['prefix' => 'users'], function () {
        Route::get('/', ['as' => 'app.users.list', 'uses' => 'DTUsersController@index']);
        Route::get('/create', ['uses' => 'DTUsersController@create']);
        Route::post('/create', ['as' => 'app.users.create', 'uses' => 'DTUsersController@store']);

    });

    Route::group(['prefix' => '{id}'], function () {

        Route::get('/', ['uses' => 'DTUsersController@show']);
        Route::get('/edit', ['uses' => 'DTUsersController@edit']);
        Route::post('/edit', ['as' => 'app.users.update', 'uses' => 'DTUsersController@update']);
        Route::delete('/delete', ['as' => 'app.users.delete', 'uses' => 'DTUsersController@destroy']);
    });

    /** Permissions routes  */

    Route::group(['prefix' => 'permissions'], function () {
        Route::get('/', ['as' => 'app.permissions.list', 'uses' => 'DTPermissionsController@index']);
        Route::get('/create', ['uses' => 'DTPermissionsController@create']);
        Route::post('/create', ['as' => 'app.permissions.create', 'uses' => 'DTPermissionsController@store']);

    });

    Route::group(['prefix' => '{id}'], function () {

        Route::get('/', ['uses' => 'DTPermissionsController@show']);
        Route::get('/edit', ['uses' => 'DTPermissionsController@edit']);
        Route::post('/edit', ['as' => 'app.permissions.update', 'uses' => 'DTPermissionsController@update']);
        Route::delete('/delete', ['as' => 'app.permissions.delete', 'uses' => 'DTPermissionsController@destroy']);
    });

}); /** END of ADMIN routes*/



/**  USER Permissions */

Route::group(['prefix' => 'user'], function () {
    Route::group(['prefix' => 'pizzas'], function () {
        Route::get('/', ['as' => 'app.pizzas.index', 'uses' => 'DTPizzasController@index']);
        Route::get('/create', ['uses' => 'DTPizzasController@create']);
        Route::post('/create', ['as' => 'app.pizzas.create', 'uses' => 'DTPizzasController@store']);
        Route::get('/', ['uses' => 'DTPizzasController@show']);
    });
});
/** END of USER routes*/

