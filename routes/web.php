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


Route::group(['prefix' => 'service'], function() {


    Route::group(['prefix' => 'cheese'], function() {

        Route::get('/', ['uses' => 'DTCheeseController@index', 'as' => 'app.service.cheese.list']);

        Route::get('/create', ['uses' => 'DTCheeseController@create', 'as' => 'app.service.cheese.add']);

        Route::post('/create', ['uses' => 'DTCheeseController@store']);

        Route::group(['prefix' => '{id}'], function() {

            Route::get('/', ['uses' => 'DTCheeseController@show', 'as' => 'app.service.cheese.edit']);

            Route::get('/edit', ['uses' => 'DTCheeseController@edit']);

            Route::post('/edit', ['uses' => 'DTCheeseController@update']);

            Route::delete('/delete', ['uses' => 'DTCheeseController@destroy', 'as'   => 'app.service.cheese.delete']);

        });
    });


    Route::group(['prefix' => 'ingredients'], function() {

        Route::get('/', ['uses' => 'DTIngredientsController@index', 'as' => 'app.service.ingredients.list']);

        Route::get('/create', ['uses' => 'DTIngredientsController@create', 'as' => 'app.service.ingredients.add']);

        Route::post('/create', ['uses' => 'DTIngredientsController@store']);

        Route::group(['prefix' => '{id}'], function() {

            Route::get('/', ['uses' => 'DTIngredientsController@show', 'as' => 'app.service.ingredients.edit']);

            Route::get('/edit', ['uses' => 'DTIngredientsController@edit']);

            Route::post('/edit', ['uses' => 'DTIngredientsController@update']);

            Route::delete('/delete', ['uses' => 'DTIngredientsController@destroy', 'as'   => 'app.service.ingredients.delete']);

        });
    });


    Route::group(['prefix' => 'pads'], function() {

        Route::get('/', ['uses' => 'DTPadsController@index', 'as' => 'app.service.pads.list']);

        Route::get('/create', ['uses' => 'DTPadsController@create', 'as' => 'app.service.pads.add']);

        Route::post('/create', ['uses' => 'DTPadsController@store']);

        Route::group(['prefix' => '{id}'], function() {

            Route::get('/', ['uses' => 'DTPadsController@show', 'as' => 'app.service.pads.edit']);

            Route::get('/edit', ['uses' => 'DTPadsController@edit']);

            Route::post('/edit', ['uses' => 'DTPadsController@update']);

            Route::delete('/delete', ['uses' => 'DTPadsController@destroy', 'as'   => 'app.service.pads.delete']);

        });
    });


    Route::group(['prefix' => 'pizzas'], function() {

        Route::get('/', ['uses' => 'DTPizzasController@index', 'as' => 'app.service.pizzas.list']);

        Route::get('/create', ['uses' => 'DTPizzasController@create', 'as' => 'app.service.pizzas.add']);

        Route::post('/create', ['uses' => 'DTPizzasController@store']);

        Route::group(['prefix' => '{id}'], function() {

            Route::get('/', ['uses' => 'DTPizzasController@show', 'as' => 'app.service.pizzas.edit']);

            Route::get('/edit', ['uses' => 'DTPizzasController@edit']);

            Route::post('/edit', ['uses' => 'DTPizzasController@update']);

            Route::delete('/delete', ['uses' => 'DTPizzasController@destroy', 'as'   => 'app.service.pizzas.delete']);

        });
    });


    Route::group(['prefix' => 'users'], function() {

        Route::get('/', ['uses' => 'DTUsersController@index', 'as' => 'app.service.users.list']);

        Route::get('/create', ['uses' => 'DTUsersController@create', 'as' => 'app.service.users.add']);

        Route::post('/create', ['uses' => 'DTUsersController@store']);

        Route::get('/{id}', ['uses' => 'DTUsersController@show', 'as' => 'app.service.users.show']);


    });
});





Route::group(['prefix' => 'admin'], function() {

    Route::group(['prefix' => 'service'], function() {

        Route::group(['prefix' => 'cheese'], function() {

            Route::get('/', ['uses' => 'DTCheeseController@index', 'as' => 'app.admin.service.cheese.list']);

            Route::get('/create', ['uses' => 'DTCheeseController@create', 'as' => 'app.admin.service.cheese.add']);

            Route::post('/create', ['uses' => 'DTCheeseController@store']);

            Route::group(['prefix' => '{id}'], function() {

                Route::get('/', ['uses' => 'DTCheeseController@show', 'as' => 'app.admin.service.cheese.edit']);

                Route::get('/edit', ['uses' => 'DTCheeseController@edit']);

                Route::post('/edit', ['uses' => 'DTCheeseController@update']);

                Route::delete('/delete', ['uses' => 'DTCheeseController@destroy', 'as'   => 'app.admin.service.cheese.delete']);

            });
        });


        Route::group(['prefix' => 'ingredients'], function() {

            Route::get('/', ['uses' => 'DTIngredientsController@index', 'as' => 'app.admin.service.ingredients.list']);

            Route::get('/create', ['uses' => 'DTIngredientsController@create', 'as' => 'app.admin.service.ingredients.add']);

            Route::post('/create', ['uses' => 'DTIngredientsController@store']);

            Route::group(['prefix' => '{id}'], function() {

                Route::get('/', ['uses' => 'DTIngredientsController@show', 'as' => 'app.admin.service.ingredients.edit']);

                Route::get('/edit', ['uses' => 'DTIngredientsController@edit']);

                Route::post('/edit', ['uses' => 'DTIngredientsController@update']);

                Route::delete('/delete', ['uses' => 'DTIngredientsController@destroy', 'as'   => 'app.admin.service.ingredients.delete']);

            });
        });


        Route::group(['prefix' => 'pads'], function() {

            Route::get('/', ['uses' => 'DTPadsController@index', 'as' => 'app.admin.service.pads.list']);

            Route::get('/create', ['uses' => 'DTPadsController@create', 'as' => 'app.admin.service.pads.add']);

            Route::post('/create', ['uses' => 'DTPadsController@store']);

            Route::group(['prefix' => '{id}'], function() {

                Route::get('/', ['uses' => 'DTPadsController@show', 'as' => 'app.admin.service.pads.edit']);

                Route::get('/edit', ['uses' => 'DTPadsController@edit']);

                Route::post('/edit', ['uses' => 'DTPadsController@update']);

                Route::delete('/delete', ['uses' => 'DTPadsController@destroy', 'as'   => 'app.admin.service.pads.delete']);

            });
        });


        Route::group(['prefix' => 'pizzas'], function() {

            Route::get('/', ['uses' => 'DTPizzasController@index', 'as' => 'app.admin.service.pizzas.list']);

            Route::get('/create', ['uses' => 'DTPizzasController@create', 'as' => 'app.admin.service.pizzas.add']);

            Route::post('/create', ['uses' => 'DTPizzasController@store']);

            Route::group(['prefix' => '{id}'], function() {

                Route::get('/', ['uses' => 'DTPizzasController@show', 'as' => 'app.admin.service.pizzas.edit']);

                Route::get('/edit', ['uses' => 'DTPizzasController@edit']);

                Route::post('/edit', ['uses' => 'DTPizzasController@update']);

                Route::delete('/delete', ['uses' => 'DTPizzasController@destroy', 'as'   => 'app.admin.service.pizzas.delete']);

            });
        });


        Route::group(['prefix' => 'permissions'], function() {

            Route::get('/', ['uses' => 'DTPermissionsController@index', 'as' => 'app.admin.service.permissions.list']);

            Route::get('/create', ['uses' => 'DTPermissionsController@create', 'as' => 'app.admin.service.permissions.add']);

            Route::post('/create', ['uses' => 'DTPermissionsController@store']);

            Route::group(['prefix' => '{id}'], function() {

                Route::get('/', ['uses' => 'DTPermissionsController@show', 'as' => 'app.admin.service.permissions.edit']);

                Route::get('/edit', ['uses' => 'DTPermissionsController@edit']);

                Route::post('/edit', ['uses' => 'DTPermissionsController@update']);

                Route::delete('/delete', ['uses' => 'DTPermissionsController@destroy', 'as'   => 'app.admin.service.permissions.delete']);

            });
        });

        Route::group(['prefix' => 'roles'], function() {

            Route::get('/', ['uses' => 'DTRolesController@index', 'as' => 'app.admin.service.roles.list']);

            Route::get('/create', ['uses' => 'DTRolesController@create', 'as' => 'app.admin.service.roles.add']);

            Route::post('/create', ['uses' => 'DTRolesController@store']);

            Route::group(['prefix' => '{id}'], function() {

                Route::get('/', ['uses' => 'DTRolesController@show', 'as' => 'app.admin.service.roles.edit']);

                Route::get('/edit', ['uses' => 'DTRolesController@edit']);

                Route::post('/edit', ['uses' => 'DTRolesController@update']);

                Route::delete('/delete', ['uses' => 'DTRolesController@destroy', 'as'   => 'app.admin.service.roles.delete']);

            });
        });

        Route::group(['prefix' => 'users'], function() {

            Route::get('/', ['uses' => 'DTUsersController@index', 'as' => 'app.admin.service.users.list']);

            Route::get('/create', ['uses' => 'DTUsersController@create', 'as' => 'app.admin.service.users.add']);

            Route::post('/create', ['uses' => 'DTUsersController@store']);

            Route::group(['prefix' => '{id}'], function() {

                Route::get('/', ['uses' => 'DTUsersController@show', 'as' => 'app.admin.service.users.edit']);

                Route::get('/edit', ['uses' => 'DTUsersController@edit']);

                Route::post('/edit', ['uses' => 'DTUsersController@update']);

                Route::delete('/delete', ['uses' => 'DTUsersController@destroy', 'as'   => 'app.admin.service.users.delete']);

            });
        });
    });

});









