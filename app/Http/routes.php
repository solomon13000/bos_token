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
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/api/v1/authenticate/user','Authenticate\AuthenticateController@login');
	 
Route::group(['middleware' => 'jwt.auth'], function () {
	 Route::get('/api/v1/authenticate/user', 'Authenticate\AuthenticateController@getAuthUser');
});

Route::get('/api/v1/employee/list','Employee\EmployeeController@lsAll');
Route::post('/api/v1/employee/search','Employee\EmployeeController@search');
Route::get('/api/v1/employee/get/{id}','Employee\EmployeeController@getOne');

Route::post('/api/v1/employee/update/{id}','Employee\EmployeeController@update');
Route::delete('/api/v1/employee/delete/{id}','Employee\EmployeeController@delete');
Route::post('/api/v1/employee/add','Employee\EmployeeController@add');


	
//Route::post('/api/v1/employee', 'EmployeeController@store');
//Route::post('/api/v1/employee/{id}', 'EmployeeController@update');
//Route::delete('/api/v1/employee/{id}', 'EmployeeController@destroy');

?>