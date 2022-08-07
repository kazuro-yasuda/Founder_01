<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\User;
use App\Models\Image;
use App\Models\Video;
use App\Models\Company;
use App\Models\Large_category;
use App\Models\Medium_category;
use Auth;
use Validator;

use Illuminate\Http\Request;

class ItemsAdminController extends Controller
{
     public function __construct()
    {
        $this->company = new Company();
        $this->large_category = new Large_category();
        $this->medium_category = new Medium_category();
        
    }
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         $companies = Company::all();
         $large_categories= Large_category::all();
         $medium_categories= Medium_category::all();
         return view('items_admin', compact('companies','large_categories','medium_categories'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           //バリデーション
        $validator = Validator::make($request->all(), 
        [
        'item_name' => 'required|max:255',
        ]);
        //バリデーション:エラー 
        if ($validator->fails()) {
        return redirect('/items_admin')
        ->withInput()
        ->withErrors($validator);
        }
        //以下に登録処理を記述（Eloquentモデル）
        // Eloquent モデル
         $items= new Item;
         $items->item_name = $request->item_name;
         $items->medium_category_id = $request->medium_category;
         $items->company_id = $request->company;
         $items->item_text = $request->item_text;
         $items->video_url = $request->video_url;
         $items->save(); 
         
         //（確認）items_adminにフォームを作る＆DB登録は下記の考えで正しいのか！？
        //  $images= new Imege;
        //  $images->name = $request->name;
        //  $images->img_url = $request->img_url;
         
         return redirect('/items_admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
