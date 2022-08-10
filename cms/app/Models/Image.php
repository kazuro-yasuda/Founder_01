<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    
    // Itemsテーブルとのリレーション （従テーブル側）
     //ひとつの画像は、ひとつの商品に紐づく
     public function items() {
        return $this->belongsTo('App\Models\Item');
    }
    
}
