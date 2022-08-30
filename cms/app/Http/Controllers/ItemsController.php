<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\User;
use App\Models\Company;
use App\Models\Unite;
use Auth;
use Validator;


class ItemsController extends Controller
{
    
    //商品一覧表示（ランキング昇順表示）
    public function index()
    {
        // $items = Item::all();
        $items = Item::with('company')->get();
        
        //ランキング順に
        $items = $items->sortBy('current_ranking')->values();
        
        //dd($items);
        return view('items',['items'=> $items]);
    }
    
    
    //「いいね機能」
    //ログインユーザーが、商品に「いいね」をすると中間テーブルにデータ保存
    public function nice($item_id)
    {
        //ログイン中のユーザーを取得
        $user = Auth::user();
        
        //お気に入りする商品
        $item = Item::find($item_id);
        //$item = Item::where('item_id',$item_id)->firstOrFail();
    
    
        //リレーションの登録
        $item->nice_users()->attach($user);
        
        return redirect('/items');
        
    }
    
    
    
}
