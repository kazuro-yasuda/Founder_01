<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Large_category extends Model
{
    use HasFactory;
    
    // Itemsテーブルとのリレーション （主テーブル側）
    //ひとつの大カテゴリーは、複数の中カテゴリーに紐づく
     public function medium_categories() {
        return $this->hasMany('App\Models\Medium_category');
    }
    
}
