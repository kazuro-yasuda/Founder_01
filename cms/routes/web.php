<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\WelcomeFounderController;
use App\Http\Controllers\LargeCategoryController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ItemsAdminController;
use App\Http\Controllers\CompareController;
// use App\Http\Controllers\ItemsAdminController;//追記

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

//トップページ表示
Route::get('/', [WelcomeFounderController::class, 'index']);

//大カテゴリーページ表示
Route::get('/categories',  [LargeCategoryController::class, 'index']);
    
//商品一覧ページ表示
Route::get('/items',   [ItemsController::class, 'index']);

// いいねボタン
// Route::get('/items/nice/{item}', 'NiceController@nice')->name('nice');
// Route::get('/items/unnice/{item}', 'NiceController@unnice')->name('unnice');

//商品詳細ページ表示
Route::get('/item', [ItemController::class, 'index']);

//比較ページ表示
Route::get('/compare', [CompareController::class, 'index']);



Route::get('/items_admin', [ItemsAdminController::class, 'index']);

Route::post('/items_admin', [ItemsAdminController::class, 'store']);




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
