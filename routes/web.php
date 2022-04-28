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
Route::get('/route1', function () {
echo "<center><h1> Tes Halaman pertama </h1>";
});
Route::get('/route2', function () {
echo "<center><h1> Tes Halaman kedua </h1>";
});
