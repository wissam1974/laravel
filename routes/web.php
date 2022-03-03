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

Route::get('/', 'App\Http\Controllers\ViewController@welcome');
Route::get('/bxif', 'App\Http\Controllers\ViewController@start');

//Data Base
Route::get('/form/rec', 'App\Http\Controllers\PizzaController@formInsert');
Route::post('/funcInsert', 'App\Http\Controllers\PizzaController@Insert');

Route::get('/allpizza', 'App\Http\Controllers\PizzaController@all');

Route::get('/onerec/{id}', 'App\Http\Controllers\PizzaController@show');

Route::get('/qryrec/{id}', 'App\Http\Controllers\PizzaController@getRec');





Route::get('/form/update', 'App\http\controllers\PizzaController@formUpdate');
Route::post('/funcUpdate', 'App\http\controllers\PizzaController@update');

Route::get('/selectAll', 'App\http\controllers\PizzaController@selectAll');


Route::get('/bxindx', 'App\http\controllers\PizzaController@indexp');

Route::get('/fromdel', 'App\http\controllers\PizzaController@formDelete');
Route::POST('/funcDelete', 'App\http\controllers\PizzaController@delete');










