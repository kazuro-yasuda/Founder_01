<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use宣言追加
use App\Models\Item;
use App\Models\Nice;
use Illuminate\Support\Facades\Auth;

class NiceController extends Controller
{
    //いいね」をつけるためにniceメソッド
     public function nice(Item $item, Request $request){
        $nice=New Nice();
        $nice->item_id=$item->id;
        $nice->user_id=Auth::user()->id;
        $nice->save();
        return back();
    }
    //「いいね」を取り消すunniceメソッド
    public function unnice(Item $item, Request $request){
        $user=Auth::user()->id;
        $nice=Nice::where('item_id', $item->id)->where('user_id', $user)->first();
        $nice->delete();
        return back();
    }

    
}
