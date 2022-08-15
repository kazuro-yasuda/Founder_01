<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
     use HasFactory;
    
    // Itemsテーブルとのリレーション （主テーブル側）
    //ひとつのブランドは、複数の商品を持つ
     public function items() {
        return $this->hasMany('App\Models\Item');
        //return $this->hasMany('App\Models\Item','company_id','company_id');
    }
    
   
}
