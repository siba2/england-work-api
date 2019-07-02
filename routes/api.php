<?php

Route::get('employees/all', 'EmployeesController@getAll');
Route::get('employees/{employee}', 'EmployeesController@getOne');
Route::post('employees', 'EmployeesController@store');
Route::put('employees/{employee}', 'EmployeesController@update');
Route::delete('employees/{employee}', 'EmployeesController@delete');

Route::get('expenses/all', 'ExpensesController@getAll');
Route::get('expenses/{expense}', 'ExpensesController@getOne');
Route::post('expenses', 'ExpensesController@store');
Route::put('expenses/{expense}', 'ExpensesController@update');
Route::delete('expenses/{expense}', 'ExpensesController@delete');

Route::get('work-hours/all', 'WorkHoursController@getAll');
Route::get('work-hours/{workhour}', 'WorkHoursController@getOne');
Route::post('work-hours', 'WorkHoursController@store');
Route::put('work-hours/{workhour}', 'WorkHoursController@update');
Route::delete('work-hours/{workhour}', 'WorkHoursController@delete');
