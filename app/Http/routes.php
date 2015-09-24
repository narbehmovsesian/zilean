<?php


Route::get('/', 'ClassController@index');
Route::get('/home', 'ClassController@index');

Route::get('/add', 'ClassController@add');
Route::post('add', 'ClassController@store');

Route::get('/addClass/{id}', 'ClassController@addClass');
Route::post('addClass', 'ClassController@storeClass');

Route::get('/delete/{id}', 'ClassController@deleteClass');

Route::get('/edit/{id}', 'ClassController@getEditClass');
Route::patch('/edit/{id}', 'ClassController@postEditClass');


Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);