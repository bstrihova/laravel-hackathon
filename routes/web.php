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

Route::get("/animals", "AnimalController@index");
Route::get("/animals/create/{owner_id}", "AnimalController@create");
Route::get("/animals/{animal_id}", "AnimalController@show");
Route::post("/animals/{owner_id}", "AnimalController@store");

Route::get("/owners", "OwnerController@index");
Route::get("/owners/create", "OwnerController@create");
Route::get("/owners/{owner_id}", "OwnerController@show");
Route::post("/owners", "OwnerController@store");


