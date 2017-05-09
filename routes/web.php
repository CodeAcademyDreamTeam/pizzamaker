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





}); /** END of ADMIN */

