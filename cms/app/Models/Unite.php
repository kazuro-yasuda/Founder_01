<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unite extends Model
{
    use HasFactory;
    
    // ユーザーテーブルとのリレーション （従テーブル側）
    //一つのUniteは、複数のユーザーが属する
     public function user() {
        return $this->belongsTo('App\Models\User');
      }
      
     // Itemsテーブルとの多対多リレーション（中間テーブル:item_unite用）
     //ひとつのUniteは、複数の商品を「気になるチェック」できる
     public function items() {
        return $this->belongsToMany('App\Models\Item');
    }
      

    
}
