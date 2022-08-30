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
use App\Http\Controllers\ItemDetailController;



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
//[ ユーザー側の画面関係]

//トップページ表示
Route::get('/', [WelcomeFounderController::class, 'index']);

//中カテゴリーページ表示
Route::get('/categories',  [MediumCategoryController::class, 'index']);
    
//商品一覧ページ表示
Route::get('/items',   [ItemsController::class, 'index']);

// いいねボタン
 Route::post('/items/{item_id}', [ItemsController::class, 'nice']); 

//商品詳細ページ表示
Route::get('/item/{id}', [ItemController::class, 'index']);




//「気になるボタン」比較ページ表示
Route::get('/compare/{item_unite_id}', [CompareController::class, 'intereste']);

//中間テーブルのデータをもとに比較画面表示
//Route::get('/compare/{unite_id}', [CompareController::class, 'index']);

//「気になるボタン」uniteテーブル・中間テーブルに保存
Route::post('/compare/create', [CompareController::class, 'create']);





//[ 管理者側の画面関係]
// ①商品の追加ダッシュボード表示(items_admin.blade.php)
 Route::get('/items_admin', [ItemsAdminController::class, 'index']);
 
 // ②商品を追加
 Route::post('/add_item', [ItemsAdminController::class, 'store']);
 
 
// //③商品更新処理
// Route::post('/@@@',[ItemsAdminController::class, 'update']);

// //④商品削除
// Route::delete('/@@@k/{@@@}',[ItemsAdminController::class, 'destroy']);


//画像アップロード画面表示
//Route::get('/image', [ImageController::class, 'index']);

//画像アップロード処理
//Route::post('/image/upload',[ImageController::class, 'upload']);




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

