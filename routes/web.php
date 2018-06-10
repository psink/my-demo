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
Route::get('user/{id}', function ($id) {
    return 'User '. $id;
});
route::get('foo','controller@view');
Route::get('greeting','controller@showall');

Route::get('/go', function () {
     $users = DB::table('student')->get();
     return view('login',['name'=>$users]);
});

