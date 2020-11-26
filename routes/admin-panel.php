<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Panel Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin panel routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" and "auth" middleware group. Now create something great!
|
*/

// Home
Route::view('/home', 'home.home')->name('home');

// Companies
Route::resource('companies', 'Companies\CompanyController');

// Employees
Route::resource('employees', 'Employees\EmployeeController');
