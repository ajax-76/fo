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
// */
 Route::get('/', function () {
 return view('welcome');
 });

Route::group([
    'prefix' => 'api/v1',
    'namespace' => 'Api'
], function () {

    Route::post('/auth/register', [
        'as' => 'auth.register',
        'uses' => 'AuthController@register'
    ]);

    Route::post('/auth/login', [
        'as' => 'auth.login',
        'uses' => 'AuthController@login'
    ]);

    /*Route::get('/auth/reset',[

        'as'=>'auth.reset',
        'uses'=>'ResetPasswordController@getReset'

        ]);
    Route::post('/auth/reset',[

        'as'=>'auth.reset',
        'uses'=>'ResetPasswordController@postReset'

        ]);*/
});
//Route::post('password/email', 'Auth\PasswordController@postEmail');
//Route::post('password/reset', 'Auth\PasswordController@postReset');
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

Route::group([

    'prefix'=>'RestListApi/v1',
    'namespace'=>'RestListApi'
    ],function(){

        Route::get('list/rest',[

             'as'=>'list.rest',
             'uses'=>'RestListController@index'

            ]);


    });

Route::get('restcomp','rest\restcompanycontroller@index');
Route::post('restcomp','rest\restcompanycontroller@store');
Route::get('rest','rest\restcontroller@index');
Route::post('rest','rest\restcontroller@store');
Route::get('restview','rest\restviewcontroller@index');
Route::post('restview','rest\restviewcontroller@store');
Route::get('restimage','rest\restimagecontroller@index');
Route::post('restimage','rest\restimagecontroller@store');
Route::get('restschedule','rest\restschedulecontroller@index');
Route::post('restschedule','rest\restschedulecontroller@store');
Route::get('menu','rest\menucontroller@index');
Route::post('menu','rest\menucontroller@store');
Route::get('menuitem','rest\menuitemcontroller@index');
Route::post('menuitem','rest\menuitemcontroller@store');
Route::get('menuitemoption','rest\menuitemoptioncontroller@index');
Route::post('menuitemoption','rest\menuitemoptioncontroller@store');
Route::get('menuitemoptionlist','rest\menuitemoptionlistcontroller@index');
Route::post('menuitemoptionlist','rest\menuitemoptionlistcontroller@store');
// Route::get('optionyield','rest\optionyieldcontroller@index');
// Route::post('optionyield','rest\optionyieldcontroller@store');
