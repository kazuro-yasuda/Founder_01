<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\User;
use App\Models\Company;
use App\Models\Unite;
use App\Models\Item_unite;
use Auth;
use Validator;


class CompareController extends Controller
{
    
      public function create(Request $request){
         //dd($request)
         
        //ログインユーザーが、「気になるボタン」を押すと、
        //①Uniteテーブルにボタンを押したuserを登録
        
        //ログイン中のユーザーを取得
         $user = Auth::user();
        
         $unite= new Unite;
         $unite->user_id = $user->id;
         $unite->save(); 
         //dd($unite);
         
        // return view('compare/item_unite_id');
         
        //②気になるボタンに入っている値を中間テーブルに登録
        
        //文字列で値を取得
         $item_ids = explode(',', $request->compare_items);
         //dd($item_ids);
        
        // //foreach文でまわして全ての値を登録
        foreach($item_ids as $item_id) {
          
        // //uniteテーブルとitemsテーブルの多対多リーレション
        $unite->items()->attach($item_id);
  
        }
        
       //比較ボタンに戻す
       return redirect('/compare/'.$unite->id);
     }
  
    

       //比較画面を表示
    public function intereste(Request $request)
    {
      //unite_id　で中間テーブルをwhereする

      $item_unites = Item_unite::where('unite_id','=',$request->item_unite_id)->pluck('item_id');
       //dd($item_unites);
       
      //item_id　をwhereする
      $items = Item::whereIn('id',$item_unites)->get();
        //dd($items);
    
    //選択したitem_uniteを表示する
     return view('compare',['items'=> $items]);
    
    }
    
}

