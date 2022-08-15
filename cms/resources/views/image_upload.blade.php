@extends('layouts.app')
@section('content')

@if ($errors->any())
<div class="errors">
     <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
     </ul>
</div>
@endif 

<form action="{{ url('/image/upload') }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
        <!-- 商品名 -->
            <div class="form-group">
                商品名
                <div class="col-sm-6">
                    <input type="string" name="item_name" class="form-control">
                </div>
            </div>
            <div class="form-group">
                画像：メイン
        <input id="fileUploader" type="file" name="image" accept='images/' enctype="multipart/form-data" multiple="multiple" required autofocus>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">送信</button>
</form>




@endsection