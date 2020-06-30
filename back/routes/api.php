<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/additem',[
    'uses'=>'ItemsController@postItem'
]);
Route::get('/getitem',[
    'uses'=>'ItemsController@getItem'
]);
Route::delete('/deleteitem/{id}',[
    'uses'=>'ItemsController@deleteItem'
]);
Route::put('/edititem/{id}',[
    'uses'=>'ItemsController@editItem'
]);