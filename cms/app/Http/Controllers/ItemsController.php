<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\User;
use App\Models\Company;
use Auth;
use Validator;


class ItemsController extends Controller
{
    
    public function index()
    {
        // $items = Item::all();
        $items = Item::orderBy( 'current_ranking', 'asc')->get();
        //   dd($items);
        return view('items',['items'=> $items]);
    }
    
    
    //ログインユーザーが、商品に「いいね」をすると中間テーブルにデータ保存
    public function nice($item_id)
    {
        //ログイン中のユーザーを取得
        $user = Auth::user();
        
        //お気に入りする商品
        $item = Item::find($item_id);
        
        //リレーションの登録
        $item->nice_users()->attach($user);
        
        return redirect('/items');
        
    }
    
}
