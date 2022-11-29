<?php

use Illuminate\Support\Facades\Route;

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
    $name = 'Cars Project';
    $age = 35;
    return view('Welcome', compact( 'name', 'age'));
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/laravel-cars', 'CarsController@index');
Route::get('/laravel-cars/{id}', 'CarsControler@show');
