<!-- resources/views/items_admin.blade.php -->
@extends('layouts.app')
@section('content')

<div class="container">
    <!-- Bootstrapの定形コード… -->
    <div class="card-body">
        <div class="card-title fs-4">
            商品登録フォーム
        </div>
        <!-- バリデーションエラーの表示に使用-->
    	@include('common.errors')
      
        <!-- 商品登録フォーム -->
        <form action="{{ url('add_item') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
            {{ csrf_field() }}
            <!-- 登録商品名 -->
            <div class="form-group">
                商品名
                <div class="col-sm-6">
                    <input type="string" name="name" class="form-control">
                </div>
            </div>
            
             <!-- 大カテゴリー -->
            <div class="form-group">
                大カテゴリー　※下記より選択してください※
                <div class="col-sm-6">
                    <select type="integer" class="form-control" name="large_category">
                         @foreach ($large_categories as $large_category)
                            <option value="{{ $large_category->id }}">{{ $large_category->name }}</option>
                         @endforeach
                    </select>
                </div>
            </div>
            
            <!-- 中カテゴリー -->
            <div class="form-group">
                 中カテゴリー　※下記より選択してください※
                <div class="col-sm-6">
                    <select type="integer" class="form-control" name="medium_category">
                         @foreach ($medium_categories as $medium_category)
                            <option value="{{ $medium_category->id }}">{{ $medium_category->name }}</option>
                         @endforeach
                    </select>
                </div>
            </div>
            
            <!-- メーカー名 -->
            <div class="form-group">
                メーカー名　※下記より選択してください※
                <div class="col-sm-6">
                    <select type="integer" class="form-control" name="company">
                         @foreach ($companies as $company)
                            <option value="{{ $company->id }}">{{ $company->name }}</option>
                         @endforeach
                    </select>
                </div>
            </div>
            
            <!-- 説明文 -->
            <div class="form-group">
                説明文
                <div class="col-sm-6">
                    <input type="text" name="text" class="form-control">
                </div>
            </div>
            
            <!-- 実験動画URL①-->
            <div class="form-group">
                実験動画URL
                <div class="col-sm-6">
                    <input type="integer" name="video_url1" class="form-control">
                </div>
            </div>
            
            
             <!--画像：メイン（商品パッケージ）-->
             <div class="form-group">
                画像：メイン
            <input id="fileUploader" type="file" name="img_url_main" accept='images/' enctype="multipart/form-data" multiple="multiple" required autofocus>
            </div>
            
         
            <!--　登録ボタン -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-primary">
                        登録
                    </button>
                </div>
            </div>
        </form>
    </div>

    
@endsection