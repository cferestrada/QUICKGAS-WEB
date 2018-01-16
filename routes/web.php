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
    return view('consola');
});

Route::get('dia', function () {
    return view('dia');
});

Route::get('semana', function () {
    return view('semana');
});

Route::get('mes', function () {
    return view('mes');
});

Route::get('producto', function () {
    return view('producto');
});

Route::get('empleados', function () {
    return view('empleados');
});
Route::get('vehiculos', function () {
    return view('vehiculos');
});
Route::get('mapa', function () {
    return view('mapa');
});
Route::get('index', function () {
    return view('index');
});
Route::get('welcome', function () {
    return view('welcome');
});

Route::get('configuracion', function () {
    return view('configuracion');
});




