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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
route::get('iam/a','controller@view');

//---------------Users Module-------------------

route::post('/insert','controller@register');

Route::get('/users','controller@getUsers');

route::post('/deleteUsers/{id}','controller@deleteUsers');


// -------------------College Module------------------
