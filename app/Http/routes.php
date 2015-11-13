<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::group(['prefix' => 'api/v1/'],function() {
    Route::post('employees', ['as' => 'employees.post','uses' => '\App\Http\Controllers\Api\EmployeesController@postAction']);
    Route::get('employees', ['as' => 'employees.list', 'uses' => '\App\Http\Controllers\Api\EmployeesController@listAction']);
    Route::get('employees/{id}', ['as' => 'employees.get', 'uses' => '\App\Http\Controllers\Api\EmployeesController@getAction']);
    Route::put('employees/{id}', ['as' => 'employees.put','uses' => '\App\Http\Controllers\Api\EmployeesController@putAction']);
    Route::patch('employees/{id}', ['as' => 'employees.patch', 'uses' => '\App\Http\Controllers\Api\EmployeesController@patchAction']);
    Route::delete('employees/{id}', ['as' => 'employees.delete', 'uses' => '\App\Http\Controllers\Api\EmployeesController@deleteAction']);
});
