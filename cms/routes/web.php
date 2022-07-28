<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


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
    return view('welcome_founder');
});

Route::get('/categories', function () {
    return view('categories');
});

Route::get('/items',   function (){
    return view('items');
});

// いいねボタン
// Route::get('/items/nice/{item}', 'NiceController@nice')->name('nice');
// Route::get('/items/unnice/{item}', 'NiceController@unnice')->name('unnice');

Route::get('/item', function () {
    return view('item');
});

Route::get('/compare', function () {
    return view('compare');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
