<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    
     // Companiesテーブルとのリレーション （従テーブル側）
     //ひとつの商品は、ひとつのブランドに紐づく
     public function company() {
        return $this->belongsTo('App\Models\Company');
        //return $this->belongsTo('App\Models\Company','company_id','company_id');
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
     // Userテーブルとの多対多リレーション（中間テーブル:item_user用）
     //ひとつの商品は、複数ユーザーに「いいね」される
     public function nice_users() {
        return $this->belongsToMany('App\Models\User');
    }
    
     // Uniteテーブルとの多対多リレーション（中間テーブル:item_unite用）
     //ひとつの商品は、複数ユニットに「気になるチェック」される
     public function unites() {
        return $this->belongsToMany('App\Models\Unite');
    }
    
    
    
}
