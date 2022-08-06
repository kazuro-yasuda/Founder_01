<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;

// use宣言追加
// use App\Models\Item;
// use App\Models\Nice;
// use App\Models\User;
// use Illuminate\Support\Facades\Auth;

class ItemsController extends Controller
{
    
    public function index()
    {
       return view('items');
    }
    
    
    
    
     //ログインユーザーが、個別投稿に「いいね」をしてある場合、$niceに値が入る
    // public function show(Item $item)
    // {  
    //      $nice=Nice::where('item_id', $item->id)->where('user_id', auth()->user()->id)->first();
    //      return view('items', compact('tem', 'nice'));
    // }
    
    
}
