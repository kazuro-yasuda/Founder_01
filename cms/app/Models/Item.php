<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    
    //ひとつの商品は、ひとりのユーザーに紐づく
    //ひとつの商品は、ひとりのユーザーに紐づく
    
    //  public function user() {
    //     return $this->belongsTo('App\Models\User');
    // }
    // public function nices() {
    //     return $this->hasMany('App\Models\Nice');
    // }
    
    // Userテーブルとのリレーション （従テーブル側）
    //  public function users() {
    //     return $this->belongsTo('App\Models\User');
    // }
    
}
