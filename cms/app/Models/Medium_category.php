<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medium_category extends Model
{
    use HasFactory;
    
    // Large_categoriesテーブルとのリレーション （従テーブル側）
     //ひとつの中カテゴリーは、ひとつの商品に紐づく
     public function large_categories() {
        return $this->belongsTo('App\Models\Large_category');
    }
    
    // Itemsテーブルとのリレーション （主テーブル側）
    //ひとつの中カテゴリーは、複数の商品を持つ
     public function items() {
        return $this->hasMany('App\Models\Item');
    }
    
}
