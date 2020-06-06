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

//cuando corremos migracion en .env normal, pero cuando quitamos el punto env dice
// que esta en production

Route::get('/', function () {
    return view('welcome');
});
