<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    
     // Companiesテーブルとのリレーション （従テーブル側）
     //ひとつの商品は、ひとつのブランドに紐づく
     public function comapnies() {
        return $this->belongsTo('App\Models\Company');
    }
    
    // Medium_categoriesテーブルとのリレーション （従テーブル側）
     //ひとつの商品は、ふくすうの中カテゴリーに紐づく
     public function medium_categories() {
        return $this->belongsTo('App\Models\Medium_category');
    }
    
    // Imageテーブルとのリレーション （主テーブル側）
    //ひとつの商品は、複数の画像を持つ
     public function images() {
        return $this->hasMany('App\Models\Image');
    }
    
     // Userテーブルとのリレーション （従テーブル側）
     public function user() {
        return $this->belongsTo('App\Models\User');
    }
    
     // Userテーブルとの多対多リレーション（中間テーブル用）
     //ひとつの商品は、複数ユーザーに「いいね」される
     public function nice_users() {
        return $this->belongsToMany('App\Models\User');
    }
    
    
    
}
