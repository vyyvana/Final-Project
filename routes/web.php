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


Auth::routes();




Route::middleware('admin')->group(function()
{
    Route::get('/create', 'BookController@create')->name('create');
    Route::post('/create', 'BookController@show')->name('newForm');
    Route::get('/update/{id}', 'BookController@UpdateBook')->name('updateBook');
    Route::patch('/update/{id}', 'BookController@showUpdate')->name('showUpdate');  
    Route::delete('/delete/{id}', 'BookController@deleteBook')->name('deleteBook');
});

Route::middleware('auth')->group(function()
{
    Route::get('/view', 'BookController@ViewBook')->name('viewBook');

    Route::get('/view/{id}', 'BookController@ViewThings')->name('viewThings');

    Route::get('/faktur/{id}', 'BookController@inFaktur')->name('fakturBarang');

    Route::post('/faktur/{id}', 'BookController@fakturForm')->name('formFaktur');

    Route::get('/home', 'HomeController@index')->name('home');
    
    Route::get('/viewfaktur', 'BookController@ViewFaktur')->name('viewFaktur');
});