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





    Route::group(['prefix' => 'cheese'], function() {

        Route::get('/', ['uses' => 'DTCheeseController@index', 'as' => 'app.cheese.list']);

        Route::get('/create', ['uses' => 'DTCheeseController@create', 'as' => 'app.cheese.add']);

        Route::post('/create', ['uses' => 'DTCheeseController@store']);

        Route::group(['prefix' => '{id}'], function() {

            Route::get('/', ['uses' => 'DTCheeseController@show', 'as' => 'app.cheese.edit']);

            Route::get('/edit', ['uses' => 'DTCheeseController@edit']);

            Route::post('/edit', ['uses' => 'DTCheeseController@update']);

            Route::delete('/delete', ['uses' => 'DTCheeseController@destroy', 'as'   => 'app.cheese.delete']);

        });
    });


    Route::group(['prefix' => 'ingredients'], function() {

        Route::get('/', ['uses' => 'DTIngredientsController@index', 'as' => 'app.ingredients.list']);

        Route::get('/create', ['uses' => 'DTIngredientsController@create', 'as' => 'app.ingredients.add']);

        Route::post('/create', ['uses' => 'DTIngredientsController@store']);

        Route::group(['prefix' => '{id}'], function() {

            Route::get('/', ['uses' => 'DTIngredientsController@show', 'as' => 'app.ingredients.edit']);

            Route::get('/edit', ['uses' => 'DTIngredientsController@edit']);

            Route::post('/edit', ['uses' => 'DTIngredientsController@update']);

            Route::delete('/delete', ['uses' => 'DTIngredientsController@destroy', 'as'   => 'app.ingredients.delete']);

        });
    });


    Route::group(['prefix' => 'pads'], function() {

        Route::get('/', ['uses' => 'DTPadsController@index', 'as' => 'app.pads.list']);

        Route::get('/create', ['uses' => 'DTPadsController@create', 'as' => 'app.pads.add']);

        Route::post('/create', ['uses' => 'DTPadsController@store']);

        Route::group(['prefix' => '{id}'], function() {

            Route::get('/', ['uses' => 'DTPadsController@show', 'as' => 'app.pads.edit']);

            Route::get('/edit', ['uses' => 'DTPadsController@edit']);

            Route::post('/edit', ['uses' => 'DTPadsController@update']);

            Route::delete('/delete', ['uses' => 'DTPadsController@destroy', 'as'   => 'app.pads.delete']);

        });
    });


    Route::group(['prefix' => 'pizzas'], function() {

        Route::get('/', ['uses' => 'DTPizzasController@index', 'as' => 'app.pizzas.list']);

        Route::get('/create', ['uses' => 'DTPizzasController@create', 'as' => 'app.pizzas.add']);

        Route::post('/create', ['uses' => 'DTPizzasController@store']);

        Route::group(['prefix' => '{id}'], function() {

            Route::get('/', ['uses' => 'DTPizzasController@show', 'as' => 'app.pizzas.edit']);

            Route::get('/edit', ['uses' => 'DTPizzasController@edit']);

            Route::post('/edit', ['uses' => 'DTPizzasController@update']);

            Route::delete('/delete', ['uses' => 'DTPizzasController@destroy', 'as'   => 'app.pizzas.delete']);

        });
    });


    Route::group(['prefix' => 'users'], function() {

        Route::get('/', ['uses' => 'DTUsersController@index', 'as' => 'app.users.list']);

        Route::get('/create', ['uses' => 'DTUsersController@create', 'as' => 'app.users.add']);

        Route::post('/create', ['uses' => 'DTUsersController@store']);

        Route::get('/{id}', ['uses' => 'DTUsersController@show', 'as' => 'app.users.show']);


    });






Route::group(['prefix' => 'admin'], function() {


        Route::group(['prefix' => 'cheese'], function() {

            Route::get('/', ['uses' => 'DTCheeseController@index', 'as' => 'app.admin.cheese.list']);

            Route::get('/create', ['uses' => 'DTCheeseController@create', 'as' => 'app.admin.cheese.add']);

            Route::post('/create', ['uses' => 'DTCheeseController@store']);

            Route::group(['prefix' => '{id}'], function() {

                Route::get('/', ['uses' => 'DTCheeseController@show', 'as' => 'app.admin.cheese.edit']);

                Route::get('/edit', ['uses' => 'DTCheeseController@edit']);

                Route::post('/edit', ['uses' => 'DTCheeseController@update']);

                Route::delete('/delete', ['uses' => 'DTCheeseController@destroy', 'as'   => 'app.admin.cheese.delete']);

            });
        });


        Route::group(['prefix' => 'ingredients'], function() {

            Route::get('/', ['uses' => 'DTIngredientsController@index', 'as' => 'app.admin.ingredients.list']);

            Route::get('/create', ['uses' => 'DTIngredientsController@create', 'as' => 'app.admin.ingredients.add']);

            Route::post('/create', ['uses' => 'DTIngredientsController@store']);

            Route::group(['prefix' => '{id}'], function() {

                Route::get('/', ['uses' => 'DTIngredientsController@show', 'as' => 'app.admin.ingredients.edit']);

                Route::get('/edit', ['uses' => 'DTIngredientsController@edit']);

                Route::post('/edit', ['uses' => 'DTIngredientsController@update']);

                Route::delete('/delete', ['uses' => 'DTIngredientsController@destroy', 'as'   => 'app.admin.ingredients.delete']);

            });
        });


        Route::group(['prefix' => 'pads'], function() {

            Route::get('/', ['uses' => 'DTPadsController@index', 'as' => 'app.admin.pads.list']);

            Route::get('/create', ['uses' => 'DTPadsController@create', 'as' => 'app.admin.pads.add']);

            Route::post('/create', ['uses' => 'DTPadsController@store']);

            Route::group(['prefix' => '{id}'], function() {

                Route::get('/', ['uses' => 'DTPadsController@show', 'as' => 'app.admin.pads.edit']);

                Route::get('/edit', ['uses' => 'DTPadsController@edit']);

                Route::post('/edit', ['uses' => 'DTPadsController@update']);

                Route::delete('/delete', ['uses' => 'DTPadsController@destroy', 'as'   => 'app.admin.pads.delete']);

            });
        });


        Route::group(['prefix' => 'pizzas'], function() {

            Route::get('/', ['uses' => 'DTPizzasController@index', 'as' => 'app.admin.pizzas.list']);

            Route::get('/create', ['uses' => 'DTPizzasController@create', 'as' => 'app.admin.pizzas.add']);

            Route::post('/create', ['uses' => 'DTPizzasController@store']);

            Route::group(['prefix' => '{id}'], function() {

                Route::get('/', ['uses' => 'DTPizzasController@show', 'as' => 'app.admin.pizzas.edit']);

                Route::get('/edit', ['uses' => 'DTPizzasController@edit']);

                Route::post('/edit', ['uses' => 'DTPizzasController@update']);

                Route::delete('/delete', ['uses' => 'DTPizzasController@destroy', 'as'   => 'app.admin.pizzas.delete']);

            });
        });


        Route::group(['prefix' => 'permissions'], function() {

            Route::get('/', ['uses' => 'DTPermissionsController@index', 'as' => 'app.admin.permissions.list']);

            Route::get('/create', ['uses' => 'DTPermissionsController@create', 'as' => 'app.admin.permissions.add']);

            Route::post('/create', ['uses' => 'DTPermissionsController@store']);

            Route::group(['prefix' => '{id}'], function() {

                Route::get('/', ['uses' => 'DTPermissionsController@show', 'as' => 'app.admin.permissions.edit']);

                Route::get('/edit', ['uses' => 'DTPermissionsController@edit']);

                Route::post('/edit', ['uses' => 'DTPermissionsController@update']);

                Route::delete('/delete', ['uses' => 'DTPermissionsController@destroy', 'as'   => 'app.admin.permissions.delete']);

            });
        });

        Route::group(['prefix' => 'roles'], function() {

            Route::get('/', ['uses' => 'DTRolesController@index', 'as' => 'app.admin.roles.list']);

            Route::get('/create', ['uses' => 'DTRolesController@create', 'as' => 'app.admin.roles.add']);

            Route::post('/create', ['uses' => 'DTRolesController@store']);

            Route::group(['prefix' => '{id}'], function() {

                Route::get('/', ['uses' => 'DTRolesController@show', 'as' => 'app.admin.roles.edit']);

                Route::get('/edit', ['uses' => 'DTRolesController@edit']);

                Route::post('/edit', ['uses' => 'DTRolesController@update']);

                Route::delete('/delete', ['uses' => 'DTRolesController@destroy', 'as'   => 'app.admin.roles.delete']);

            });
        });

        Route::group(['prefix' => 'users'], function() {

            Route::get('/', ['uses' => 'DTUsersController@index', 'as' => 'app.admin.users.list']);

            Route::get('/create', ['uses' => 'DTUsersController@create', 'as' => 'app.admin.users.add']);

            Route::post('/create', ['uses' => 'DTUsersController@store']);

            Route::group(['prefix' => '{id}'], function() {

                Route::get('/', ['uses' => 'DTUsersController@show', 'as' => 'app.admin.users.edit']);

                Route::get('/edit', ['uses' => 'DTUsersController@edit']);

                Route::post('/edit', ['uses' => 'DTUsersController@update']);

                Route::delete('/delete', ['uses' => 'DTUsersController@destroy', 'as'   => 'app.admin.users.delete']);

            });
        });
    });










