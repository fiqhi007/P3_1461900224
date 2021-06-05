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


Route::get('/','App\Http\Controllers\pasencontroller@index')->name('tampil-pasien');
Route::get('/data-pasien','App\Http\Controllers\pasienController@index')->name('data-pasien');
Route::get('/create-pasien','App\Http\Controllers\pasienController@create')->name('create-pasien');
Route::post('/simpan-pasien','App\Http\Controllers\pasienController@store')->name('simpan-pasien');