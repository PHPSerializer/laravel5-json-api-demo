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
    Route::get('employees', array(
            'as' => 'employees.list',
            'uses' => '\App\Http\Controllers\Api\EmployeesController@listAction',
        )
    );

    Route::get('employees/{id}', array(
            'as' => 'employees.get',
            'uses' => '\App\Http\Controllers\Api\EmployeesController@getAction'
        )
    );

    Route::post('employees', array(
            'as' => 'employees.post',
            'uses' => '\App\Http\Controllers\Api\EmployeesController@getAction'
        )
    );

    Route::put('employees/{id}', array(
            'as' => 'employees.put',
            'uses' => '\App\Http\Controllers\Api\EmployeesController@getAction'
        )
    );

    Route::patch('employees/{id}', array(
            'as' => 'employees.patch',
            'uses' => '\App\Http\Controllers\Api\EmployeesController@getAction'
        )
    );


    Route::delete('employee/{id}', array(
            'as' => 'employees.delete',
            'uses' => '\App\Http\Controllers\Api\EmployeesController@getAction'
        )
    );
});
