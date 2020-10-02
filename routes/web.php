<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'EmployeeController@index') -> name('home');

Route::get('/employee/{id}', 'EmployeeController@show') -> name('employee.show');

Route::get('/create', 'EmployeeController@create') -> name('employee.create');

Route::post('/store', 'EmployeeController@store') -> name('employee.store');

Route::get('/destroy/{id}', 'EmployeeController@destroy') -> name('employee.destroy');

Route::get('/edit/{id}', 'EmployeeController@edit') -> name('employee.edit');
Route::post('/update/{id}', 'EmployeeController@update') -> name('employee.update');
