<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\WelcomeFounderController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ItemsAdminController;
use App\Http\Controllers\CompareController;
use App\Http\Controllers\MediumCategoryController;
use App\Http\Controllers\ImageController;
// use App\Http\Controllers\ItemsAdminController;//追記
use App\Models\Item;

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

//中カテゴリーページ表示
Route::get('/categories',  [MediumCategoryController::class, 'index']);
    
//商品一覧ページ表示
Route::get('/items',   [ItemsController::class, 'index']);

//商品詳細ページ表示
Route::get('/item', [ItemController::class, 'index']);

//比較ページ表示
Route::get('/compare', [CompareController::class, 'index']);



// ①商品の追加ダッシュボード表示(items_admin.blade.php)
 Route::get('/items_admin', [ItemsAdminController::class, 'index']);
 
 // ②商品を追加
 Route::post('/add_item', [ItemsAdminController::class, 'store']);
 
 
// //③商品更新処理
// Route::post('/@@@',[ItemsAdminController::class, 'update']);

// //④商品削除
// Route::delete('/@@@k/{@@@}',[ItemsAdminController::class, 'destroy']);


// いいねボタン
 Route::post('/items/{itemid}', [ItemsController::class, 'nice']); 
 
//画像アップロード画面表示
//Route::get('/image', [ImageController::class, 'index']);

//画像アップロード処理
//Route::post('/image/upload',[ImageController::class, 'upload']);




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

