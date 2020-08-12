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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', function () {
    return view('administrative.dashboard');
});

Route::get('/iedcr/dashboard', function () {
    return view('epidemiologist.dashboard');
});

Route::get('/admin/dashboard', function () {
    return view('superadmin.dashboard');
});