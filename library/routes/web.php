<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['prefix' => 'library', 'as' => 'library.'], function () {

    Route::view('/' , 'web.client.book.index');
    Route::view('/detail' , 'web.client.book.detail');
    Route::view('/read' , 'web.client.book.read');
    
});
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

    Route::view('/' , 'web.admin.index');
    Route::view('/book' , 'web.admin.book.index');
    
});

