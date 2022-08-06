<!-- resources/views/items_admin.blade.php -->
@extends('layouts.app')
@section('content')

    <!-- Bootstrapの定形コード… -->
    <div class="card-body">
        <div class="card-title fs-4">
            商品登録フォーム
        </div>
        <!-- バリデーションエラーの表示に使用-->
    	@include('common.errors')
      
        <!-- 商品登録フォーム -->
        <form action="{{ url('add_item') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            <!-- 登録商品名 -->
            <div class="form-group">
                商品名
                <div class="col-sm-6">
                    <input type="string" name="name" class="form-control">
                </div>
            </div>
            
            <!-- 中カテゴリー -->
            <div class="form-group">
                中カテゴリー
                <div class="col-sm-6">
                    <input type="integer" name="medium_category_id" class="form-control">
                </div>
            </div>
            
            <!-- メーカーID -->
            <div class="form-group">
                メーカーID
                <select type="integer" name="company_id"　class="form-select" aria-label="Default select example">
                  <option selected>ID選択</option>
                  <option value="1">１：＠＠＠</option>
                  <option value="2">２：＠＠＠</option>
                  <option value="3">３：＠＠＠</option>
                </select>
            </div>
            
            <!-- 説明文 -->
            <div class="form-group">
                説明文
                <div class="col-sm-6">
                    <input type="text" name="text" class="form-control">
                </div>
            </div>
            
            <!-- 実験動画URL -->
            <div class="form-group">
                実験動画URL
                <div class="col-sm-6">
                    <input type="integer" name="video_url" class="form-control">
                </div>
            </div>
            
            <!--<form action="{{ url('imges') }}" method="POST" enctype="multipart/form-data">-->
            <!--    {{ csrf_field() }}-->
            <!--    <div class="form-group">-->
            <!--        <input id="fileUploader" type="file" name="img_url" accept='image/' enctype="multipart/form-data" multiple="multiple" required autofocus>-->
            <!--    </div>-->
            <!--</form>-->
            
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