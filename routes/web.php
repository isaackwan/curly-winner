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
	return view('index');
});

Route::get('/about', function () {
	return view('about');
});

Route::resource('transactions', 'TransactionController', ['only' => ['index', 'show']]);
Route::resource('loans', 'LoanController', ['only' => ['index', 'show']]);

Auth::routes();

Route::get('/logout', 'Auth\LogoutController')->name('logout');
Route::get('/advices', 'AdviceController')->name('advices');
Route::get('/funds', 'FundController')->name('funds');