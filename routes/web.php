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

Route::get('/', "Controller@hello");

Route::get('book_index', "Controller@bookkeeping")->name('book_index');

Route::get('bookkeeping_update', "Controller@bookkeeping_update")->name('bookkeeping_update');

Route::post('updatetable', "Controller@update")->name('updatetable');

Route::get('bookkeeping_delete', "Controller@bookkeeping_delete")->name('bookkeeping_delete');

Route::post('deletetable', "Controller@delete")->name('deletetable');

Route::get('about', "Controller@about")->name('about');

Route::get('bookkeeping_query', "Controller@bookkeeping_query")->name('bookkeeping_query');

//Route::get('querytable', "Controller@query")->name('querytable');

Route::post('querytable', "Controller@query")->name('querytable');
















