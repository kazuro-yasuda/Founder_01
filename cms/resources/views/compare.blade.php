@extends('layouts.app')

@section('content')

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fs-3">「商品（オムツ）を「性能（吸水性）」で比較</h1>
        <iframe width="560" height="315" 
         src=https://www.youtube.com/embed/dH988mw_kTg?autoplay=10??autoplay=1&mute=1
         title="YouTube video player" 
         frameborder="0" 
         allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
         allowfullscreen>
        </iframe><p>
          <p>↓↓他の実験でも比較チェック↓↓</p>
          <a href="#" class="btn btn-success my-2">通気性ランキング</a>
          <a href="#" class="btn btn-danger my-2">低価格ランキング</a>
        </p>
      </div>
    </div>
  </section>
  
  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        
        
        @foreach ($items as $item)
   
          <div class="col">
               <div class="card shadow-sm">
                
                <!--動画-->
                 <iframe width="100%" height="225" 
                 src={{ $item->video_url1 }}
                 title="YouTube video player" 
                 frameborder="0" 
                 allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                 allowfullscreen>
                 </iframe>
                 
                <div class="card-body">
                  <!--ブランド名-->
                  <p class="card-text fs-5">ブランド名：{{ $item->company->name}}</p>
                  
                　<!--商品名-->
                  <p class="card-text fs-4 fw-bold">商品名：{{ $item->name }}</p>
                  
                  <!--商品画像-->
                  <img src="{{ asset('uploads/' . $item->img_url_main) }}" class="w-50">
             
                  
                  <div class="d-flex justify-content-between align-items-center">
                    
            
                    <!--　詳細画面へ -->
                    <a href="/item/{{$item->id }}" class="btn btn-primary">詳細</a>
                    
                     
                    
                  </div>
                </div>
            </div>
       </div>
        @endforeach
        
        
      </div>
    </div>
  </div>
 

@endsection        
    
 
    
 