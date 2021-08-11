<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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


Route::get('/','HomeController@index')->name('dashboard');
Route::get('/author','AuthorController@index')->name('author.index');
Route::get('/author/data','DataController@authors')->name('author.data');
Route::get('/author/create','AuthorController@create')->name('author.create');
Route::post('/author/store','AuthorController@store')->name('author.store');


