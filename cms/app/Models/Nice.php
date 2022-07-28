<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nice extends Model
{
    use HasFactory;
    
    //ひとつの「いいね」は1人のユーザー、ひとつの商品投稿に紐づく
   public function user() {
        return $this->belongsTo('App\Models\User');
    }
 
    public function iteme() {
        return $this->belongsTo('App\Models\Item');
    }

    
}




