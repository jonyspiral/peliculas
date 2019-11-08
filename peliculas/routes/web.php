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
    return view('welcome');
});
Route::get('/miPrimeraRuta', function () {
    return 'Creé mi primer ruta en Laravel';
});
Route::get('/esPar/{integer}', function ($integer) {
  if ($integer % 2 ==0){
    return 'Par';
  }
    return 'impar';
});
Route::get('/sumar/{n1}/{n2}', function ($n1,$n2) {

    return $n1+$n2;
});
