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
Route::get('/', function(){
	return redirect()->route('dashboard');
});
Route::get('/dashboard', 'App\Http\Controllers\HomeController@dashboard')->name('dashboard');
Route::get('/reports', 'App\Http\Controllers\HomeController@get_reports')->name('reports');
Route::post('import', 'App\Http\Controllers\HomeController@import')->name('import');
Route::post('get_stats', 'App\Http\Controllers\HomeController@get_stats')->name('get_stats');

